<?php

namespace App\EventSubscriber;

use Doctrine\ORM\Events;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use SymfonyBundles\RedisBundle\Redis\ClientInterface;
use App\Entity\Setup;
use App\Entity\Deals;

class AdminDatabaseEventSubscriber implements EventSubscriber
{
    protected $redis;

    public function __construct(
        ClientInterface $redis
    )
    {
        $this->redis = $redis;
    }


    public function getSubscribedEvents()
    {
        return [
            Events::prePersist,
            Events::preRemove,
            Events::preUpdate,
        ];
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if ($entity instanceof Setup) {
            $this->setSetupRedis($entity);
        } elseif ($entity instanceof Deals) {
            $this->setDealsRedis($entity);
        }

    }

    public function preRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if ($entity instanceof Setup) {
            $this->deleteSetupRedis($entity);
        } elseif ($entity instanceof Deals) {
            $this->deleteDealsRedis($entity);
        }
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getObject();

        if ($entity instanceof Setup) {
            $this->updateSetupRedis($args);
        } elseif ($entity instanceof Deals) {
            $this->updateDealsRedis($args);
        }    }

    /**
     * @param Setup $setup
     * @return void
     */
    protected function setSetupRedis(Setup $setup): void
    {
        //Set bidfloor
        $this->redis->set('bidfloor:' . $setup->getPublisher() . ':' . $setup->getCountry(), $setup->getBidfloor());

        //Set Atribution Type
        $this->redis->set('at:' . $setup->getPublisher(), $setup->getAtributionType());

        //Set Blocked Advertisers
        if ($setup->getBlockedAdvertisers()) {
            $this->redis->sadd('badv:' . $setup->getPublisher(), $setup->getBlockedAdvertisers());
        }

        //Set Blocked Categories
        if ($setup->getBlockedCategories()) {
            $this->redis->sadd('bcat:' . $setup->getPublisher(), $setup->getBlockedCategories());
        }

        //Set Whitelist Seats
        if ($setup->getWhitelistSeats()) {
            $this->redis->sadd('wseat:' . $setup->getPublisher(), $setup->getWhitelistSeats());
        }

    }

    /**
     * @param Setup $setup
     * @return void
     */
    protected function deleteSetupRedis(Setup $setup): void
    {
        //Delete all publisher records
        $this->redis->del([
            'bidfloor:' . $setup->getPublisher() . ':' . $setup->getCountry(),
            'at:' . $setup->getPublisher(),
            'badv:' . $setup->getPublisher(),
            'bcat:' . $setup->getPublisher(),
            'wseat:' . $setup->getPublisher()]);

    }

    /**
     * @param PreUpdateEventArgs $args
     * @return void
     */
    protected function updateSetupRedis(PreUpdateEventArgs $args): void
    {

        $setup = $args->getObject();

        //Update Country Bidfloor
        if($args->hasChangedField('country')) {
            $this->redis->del(['bidfloor:' . $setup->getPublisher() . ':' . $args->getOldValue('country')]);
            $this->redis->set('bidfloor:' . $setup->getPublisher() . ':' . $args->getNewValue('country'), $setup->getBidfloor());
        }

        if($args->hasChangedField('bidfloor')) {
            $this->redis->set('bidfloor:' . $setup->getPublisher() . ':' . $setup->getCountry(), $setup->getBidfloor());
        }

        //Update Atribution Type
        if ($setup->getAtributionType()) {
            $this->redis->set('at:' . $setup->getPublisher(), $setup->getAtributionType());
        }

        //Update Blocked Advertisers
        $this->redis->del(['badv:' . $setup->getPublisher()]);

        if ($setup->getBlockedAdvertisers()) {
            $this->redis->sadd('badv:' . $setup->getPublisher(), $setup->getBlockedAdvertisers());
        }

        //Update Blocked Categories
        $this->redis->del(['bcat:' . $setup->getPublisher()]);

        if ($setup->getBlockedCategories()) {
            $this->redis->sadd('bcat:' . $setup->getPublisher(), $setup->getBlockedCategories());
        }

        //Update Whitelist Seats
        $this->redis->del(['wseat:' . $setup->getPublisher()]);

        if ($setup->getWhitelistSeats()) {
            $this->redis->sadd('wseat:' . $setup->getPublisher(), $setup->getWhitelistSeats());
        }
    }

    /**
     * @param Deals $deals
     * @return void
     */
    protected function setDealsRedis(Deals $deals): void
    {
        //Set deals
        $valueKey = $deals->getName().':'.implode(",",$deals->getWhitelistSeats()).':'.$deals->getBidfloor().':'.$deals->getAtributionType();
        $this->redis->sadd('deals:'.$deals->getPublisher(), [$valueKey]);

    }

    /**
     * @param Deals $deals
     * @return void
     */
    protected function deleteDealsRedis(Deals $deals): void
    {
        //Delete deals
        $valueKey = $deals->getName().':'.implode(",",$deals->getWhitelistSeats()).':'.$deals->getBidfloor().':'.$deals->getAtributionType();
        $this->redis->srem('deals:'.$deals->getPublisher(), $valueKey);

        //Check if publisher has any deal to remove set from Redis
        if ($this->redis->scard('deals:'.$deals->getPublisher())  == 0){
            $this->redis->del(['deals:'.$deals->getPublisher()]);
        }
    }

    /**
     * @param PreUpdateEventArgs $args
     * @return void
     */
    protected function updateDealsRedis(PreUpdateEventArgs $args): void
    {

        $deals = $args->getObject();

        $name = $deals->getName();
        if($args->hasChangedField('name')){
            $name = $args->getOldValue('name');
        }

        $wseats = implode(',',$deals->getWhitelistSeats());
        if($args->hasChangedField('whitelist_seats')){
            $wseats = implode(',',$args->getOldValue('whitelist_seats'));
        }

        $bidfloor = $deals->getBidfloor();
        if($args->hasChangedField('bidfloor')){
            $bidfloor = $args->getOldValue('bidfloor');
        }

        $at = $deals->getAtributionType();
        if($args->hasChangedField('atribution_type')){
        $at = $args->getOldValue('atribution_type');
        }

        $valueKeyOld = $name.':'.$wseats.':'.$bidfloor.':'.$at;

        //Update deal
        $this->redis->srem('deals:'.$deals->getPublisher(), $valueKeyOld);

        $valueKeyUpdated = $deals->getName().':'.implode(",",$deals->getWhitelistSeats()).':'.$deals->getBidfloor().':'.$deals->getAtributionType();
        $this->redis->sadd('deals:'.$deals->getPublisher(), [$valueKeyUpdated]);


    }

}
