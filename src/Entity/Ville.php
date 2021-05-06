<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity
 */
class Ville
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
     * @ORM\Column(name="ville_nom_commune", type="text", length=0, nullable=false)
     */
    private $villeNomCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_nom_region", type="text", length=0, nullable=false)
     */
    private $villeNomRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_cp", type="text", length=0, nullable=false)
     */
    private $villeCp;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_nom_departement", type="text", length=0, nullable=false)
     */
    private $villeNomDepartement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVilleNomCommune(): ?string
    {
        return $this->villeNomCommune;
    }

    public function setVilleNomCommune(string $villeNomCommune): self
    {
        $this->villeNomCommune = $villeNomCommune;

        return $this;
    }

    public function getVilleNomRegion(): ?string
    {
        return $this->villeNomRegion;
    }

    public function setVilleNomRegion(string $villeNomRegion): self
    {
        $this->villeNomRegion = $villeNomRegion;

        return $this;
    }

    public function getVilleCp(): ?string
    {
        return $this->villeCp;
    }

    public function setVilleCp(string $villeCp): self
    {
        $this->villeCp = $villeCp;

        return $this;
    }

    public function getVilleNomDepartement(): ?string
    {
        return $this->villeNomDepartement;
    }

    public function setVilleNomDepartement(string $villeNomDepartement): self
    {
        $this->villeNomDepartement = $villeNomDepartement;

        return $this;
    }


}
