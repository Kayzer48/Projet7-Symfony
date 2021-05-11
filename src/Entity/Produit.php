<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateurs::class, inversedBy="produits")
     * @ORM\JoinColumn(nullable=true)
     */
    private $produit;

    /**
     * @ORM\ManyToOne(targetEntity=CategorieProduit::class, inversedBy="produits")
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity=Commande::class, mappedBy="produit")
     */
    private $commandes;

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }



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

    public function getProduit(): ?Utilisateurs
    {
        return $this->produit;
    }

    public function setProduit(?Utilisateurs $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getCategory(): ?CategorieProduit
    {
        return $this->category;
    }

    public function setCategory(?CategorieProduit $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->addProduit($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            $commande->removeProduit($this);
        }

        return $this;
    }

}
