<?php

namespace App\Entity;

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


}
