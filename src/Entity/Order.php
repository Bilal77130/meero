<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $marketplace;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idFlux;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $orderStatus;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $orderId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarketplace(): ?string
    {
        return $this->marketplace;
    }

    public function setMarketplace(?string $marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getIdFlux(): ?string
    {
        return $this->idFlux;
    }

    public function setIdFlux(?string $idFlux): self
    {
        $this->idFlux = $idFlux;

        return $this;
    }

    public function getOrderStatus(): ?string
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(?string $orderStatus): self
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

}
