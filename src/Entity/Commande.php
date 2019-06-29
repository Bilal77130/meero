<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="CommandeRepository")
 */
class Commande
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
    private $marketPlace;

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
    private $orderItem;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarketPlace(): ?string
    {
        return $this->marketPlace;
    }

    public function setMarketPlace(?string $marketPlace): self
    {
        $this->marketPlace = $marketPlace;

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

    public function getOrderItem(): ?string
    {
        return $this->orderItem;
    }

    public function setOrderItem(?string $orderItem): self
    {
        $this->orderItem = $orderItem;

        return $this;
    }

}
