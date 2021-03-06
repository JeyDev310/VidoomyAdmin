<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Setup extends \App\Entity\Setup implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'publisher', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'country', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'atribution_type', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'bidfloor', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'blocked_categories', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'blocked_advertisers', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'whitelist_seats'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'publisher', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'country', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'atribution_type', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'bidfloor', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'blocked_categories', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'blocked_advertisers', '' . "\0" . 'App\\Entity\\Setup' . "\0" . 'whitelist_seats'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Setup $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublisher(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublisher', []);

        return parent::getPublisher();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublisher(string $publisher): \App\Entity\Setup
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublisher', [$publisher]);

        return parent::setPublisher($publisher);
    }

    /**
     * {@inheritDoc}
     */
    public function getBidfloor(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBidfloor', []);

        return parent::getBidfloor();
    }

    /**
     * {@inheritDoc}
     */
    public function setBidfloor(float $bidfloor): \App\Entity\Setup
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBidfloor', [$bidfloor]);

        return parent::setBidfloor($bidfloor);
    }

    /**
     * {@inheritDoc}
     */
    public function getAtributionType(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAtributionType', []);

        return parent::getAtributionType();
    }

    /**
     * {@inheritDoc}
     */
    public function setAtributionType(int $atribution_type): \App\Entity\Setup
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAtributionType', [$atribution_type]);

        return parent::setAtributionType($atribution_type);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockedCategories(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlockedCategories', []);

        return parent::getBlockedCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlockedCategories(?array $blocked_categories): \App\Entity\Setup
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlockedCategories', [$blocked_categories]);

        return parent::setBlockedCategories($blocked_categories);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockedAdvertisers(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlockedAdvertisers', []);

        return parent::getBlockedAdvertisers();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlockedAdvertisers(?array $blocked_advertisers): \App\Entity\Setup
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlockedAdvertisers', [$blocked_advertisers]);

        return parent::setBlockedAdvertisers($blocked_advertisers);
    }

    /**
     * {@inheritDoc}
     */
    public function getWhitelistSeats(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWhitelistSeats', []);

        return parent::getWhitelistSeats();
    }

    /**
     * {@inheritDoc}
     */
    public function setWhitelistSeats(?array $whitelist_seats): \App\Entity\Setup
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWhitelistSeats', [$whitelist_seats]);

        return parent::setWhitelistSeats($whitelist_seats);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(string $country): \App\Entity\Setup
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Setup
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

}
