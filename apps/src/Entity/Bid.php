<?php

namespace App\Entity;

use App\Repository\BidRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * @ORM\Entity(repositoryClass=BidRepository::class)
 */
class Bid
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="bids")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Auction", inversedBy="bids")
     */
    private $auction;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTime;

    /**
     * Bid constructor.
     */
    public function __construct()
    {
        $this->dateTime = new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getAuction(): ?string
    {
        return $this->auction;
    }

    public function setAuction(string $auction): self
    {
        $this->auction = $auction;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }
}
