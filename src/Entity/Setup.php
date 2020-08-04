<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SetupRepository")
 */
class Setup
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
     * @ORM\Column(type="string", length=2)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $atribution_type;

    /**
     * @ORM\Column(type="float")
     */
    private $bidfloor;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $blocked_categories = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $blocked_advertisers = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $whitelist_seats = [];

    public function __construct()
    {
    }

    public function __toString(): string
    {
        return $this->publisher;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBlockedCategories(): ?array
    {
        return $this->blocked_categories;
    }

    public function setBlockedCategories(?array $blocked_categories): self
    {
        $this->blocked_categories = $blocked_categories;

        return $this;
    }

    public function getBlockedAdvertisers(): ?array
    {
        return $this->blocked_advertisers;
    }

    public function setBlockedAdvertisers(?array $blocked_advertisers): self
    {
        $this->blocked_advertisers = $blocked_advertisers;

        return $this;
    }

    public function getWhitelistSeats(): ?array
    {
        return $this->whitelist_seats;
    }

    public function setWhitelistSeats(?array $whitelist_seats): self
    {
        $this->whitelist_seats = $whitelist_seats;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
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

}
