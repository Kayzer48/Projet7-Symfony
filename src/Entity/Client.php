<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
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
     * @ORM\Column(name="cl_nom", type="text", length=0, nullable=false)
     */
    private $clNom;

    /**
     * @var string
     *
     * @ORM\Column(name="cl_prenom", type="text", length=0, nullable=false)
     */
    private $clPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="cl_adresse", type="text", length=0, nullable=false)
     */
    private $clAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cl_tel", type="text", length=0, nullable=false)
     */
    private $clTel;

    /**
     * @var string
     *
     * @ORM\Column(name="cl_email", type="text", length=0, nullable=false)
     */
    private $clEmail;

    /**
     * @ORM\OneToMany(targetEntity=Commande::class, mappedBy="client")
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

    public function getClNom(): ?string
    {
        return $this->clNom;
    }

    public function setClNom(string $clNom): self
    {
        $this->clNom = $clNom;

        return $this;
    }

    public function getClPrenom(): ?string
    {
        return $this->clPrenom;
    }

    public function setClPrenom(string $clPrenom): self
    {
        $this->clPrenom = $clPrenom;

        return $this;
    }

    public function getClAdresse(): ?string
    {
        return $this->clAdresse;
    }

    public function setClAdresse(string $clAdresse): self
    {
        $this->clAdresse = $clAdresse;

        return $this;
    }

    public function getClTel(): ?string
    {
        return $this->clTel;
    }

    public function setClTel(string $clTel): self
    {
        $this->clTel = $clTel;

        return $this;
    }

    public function getClEmail(): ?string
    {
        return $this->clEmail;
    }

    public function setClEmail(string $clEmail): self
    {
        $this->clEmail = $clEmail;

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
            $commande->setClient($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getClient() === $this) {
                $commande->setClient(null);
            }
        }

        return $this;
    }


}
