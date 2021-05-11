<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity
 */
class Commande
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
     * @ORM\Column(name="com_libelle", type="text", length=0, nullable=false)
     */
    private $comLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="com_date", type="text", length=0, nullable=false)
     */
    private $comDate;

    /**
     * @ORM\ManyToMany(targetEntity=Produit::class, inversedBy="commandes")
     */
    private $produit;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="commandes")
     */
    private $client;

    public function __construct()
    {
        $this->produit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComLibelle(): ?string
    {
        return $this->comLibelle;
    }

    public function setComLibelle(string $comLibelle): self
    {
        $this->comLibelle = $comLibelle;

        return $this;
    }

    public function getComDate(): ?string
    {
        return $this->comDate;
    }

    public function setComDate(string $comDate): self
    {
        $this->comDate = $comDate;

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduit(): Collection
    {
        return $this->produit;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produit->contains($produit)) {
            $this->produit[] = $produit;
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        $this->produit->removeElement($produit);

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }


}
