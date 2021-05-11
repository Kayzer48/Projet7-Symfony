<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModePaiement
 *
 * @ORM\Table(name="mode_paiement")
 * @ORM\Entity
 */
class ModePaiement
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
     * @ORM\Column(name="paiement_libelle", type="text", length=0, nullable=false)
     */
    private $paiementLibelle;

    /**
     * @ORM\OneToOne(targetEntity=Commande::class, cascade={"persist", "remove"})
     */
    private $commande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaiementLibelle(): ?string
    {
        return $this->paiementLibelle;
    }

    public function setPaiementLibelle(string $paiementLibelle): self
    {
        $this->paiementLibelle = $paiementLibelle;

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }


}
