<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieProduit
 *
 * @ORM\Table(name="categorie_produit")
 * @ORM\Entity
 */
class CategorieProduit
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
     * @ORM\Column(name="cat_libelle", type="text", length=0, nullable=false)
     */
    private $catLibelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatLibelle(): ?string
    {
        return $this->catLibelle;
    }

    public function setCatLibelle(string $catLibelle): self
    {
        $this->catLibelle = $catLibelle;

        return $this;
    }


}
