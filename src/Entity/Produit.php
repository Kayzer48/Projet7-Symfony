<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_nom", type="text", length=0, nullable=false)
     */
    private $prodNom;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_description", type="text", length=0, nullable=false)
     */
    private $prodDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="prod_quantite_stock", type="integer", nullable=false)
     */
    private $prodQuantiteStock;

    /**
     * @var float
     *
     * @ORM\Column(name="prod_prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prodPrix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deposit_date", type="date", nullable=false)
     */
    private $depositDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prod_image", type="text", length=0, nullable=true)
     */
    private $prodImage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProdNom(): ?string
    {
        return $this->prodNom;
    }

    public function setProdNom(string $prodNom): self
    {
        $this->prodNom = $prodNom;

        return $this;
    }

    public function getProdDescription(): ?string
    {
        return $this->prodDescription;
    }

    public function setProdDescription(string $prodDescription): self
    {
        $this->prodDescription = $prodDescription;

        return $this;
    }

    public function getProdQuantiteStock(): ?int
    {
        return $this->prodQuantiteStock;
    }

    public function setProdQuantiteStock(int $prodQuantiteStock): self
    {
        $this->prodQuantiteStock = $prodQuantiteStock;

        return $this;
    }

    public function getProdPrix(): ?float
    {
        return $this->prodPrix;
    }

    public function setProdPrix(float $prodPrix): self
    {
        $this->prodPrix = $prodPrix;

        return $this;
    }

    public function getDepositDate(): ?\DateTimeInterface
    {
        return $this->depositDate;
    }

    public function setDepositDate(\DateTimeInterface $depositDate): self
    {
        $this->depositDate = $depositDate;

        return $this;
    }

    public function getProdImage(): ?string
    {
        return $this->prodImage;
    }

    public function setProdImage(?string $prodImage): self
    {
        $this->prodImage = $prodImage;

        return $this;
    }


}
