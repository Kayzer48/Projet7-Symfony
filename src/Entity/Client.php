<?php

namespace App\Entity;

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


}
