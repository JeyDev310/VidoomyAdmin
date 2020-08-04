<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DealsRepository")
 */
class Deals
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $publisher;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="array")
     */
    private $whitelist_seats = [];

    /**
     * @ORM\Column(type="float")
     */
    private $bidfloor;

    /**
     * @ORM\Column(type="integer")
     */
    private $atribution_type;

    /**
     * @ORM\Column(type="boolean")
     */
    private $private_auction;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getWhitelistSeats(): ?array
    {
        return $this->whitelist_seats;
    }

    public function setWhitelistSeats(array $whitelist_seats): self
    {
        $this->whitelist_seats = $whitelist_seats;

        return $this;
    }

    public function getBidfloor(): ?float
    {
        return $this->bidfloor;
    }

    public function setBidfloor(float $bidfloor): self
    {
        $this->bidfloor = $bidfloor;

        return $this;
    }

    public function getAtributionType(): ?int
    {
        return $this->atribution_type;
    }

    public function setAtributionType(int $atribution_type): self
    {
        $this->atribution_type = $atribution_type;

        return $this;
    }

    public function getPrivateAuction(): ?bool
    {
        return $this->private_auction;
    }

    public function setPrivateAuction(bool $private_auction): self
    {
        $this->private_auction = $private_auction;

        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(string $publisher): self
    {
        $this->publisher = $publisher;

        return $this;
    }
}
