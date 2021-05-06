<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity
 */
class Utilisateurs
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
     * @ORM\Column(name="user_username", type="text", length=0, nullable=false)
     */
    private $userUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="text", length=0, nullable=false)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="text", length=0, nullable=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_adresse", type="text", length=0, nullable=false)
     */
    private $userAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="user_nom", type="text", length=0, nullable=false)
     */
    private $userNom;

    /**
     * @var string
     *
     * @ORM\Column(name="user_prenom", type="text", length=0, nullable=false)
     */
    private $userPrenom;

    /**
     * @var array
     *
     * @ORM\Column(name="user_roles", type="array", length=0, nullable=false)
     */
    private $userRoles;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserUsername(): ?string
    {
        return $this->userUsername;
    }

    public function setUserUsername(string $userUsername): self
    {
        $this->userUsername = $userUsername;

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->userPassword;
    }

    public function setUserPassword(string $userPassword): self
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail): self
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    public function getUserAdresse(): ?string
    {
        return $this->userAdresse;
    }

    public function setUserAdresse(string $userAdresse): self
    {
        $this->userAdresse = $userAdresse;

        return $this;
    }

    public function getUserNom(): ?string
    {
        return $this->userNom;
    }

    public function setUserNom(string $userNom): self
    {
        $this->userNom = $userNom;

        return $this;
    }

    public function getUserPrenom(): ?string
    {
        return $this->userPrenom;
    }

    public function setUserPrenom(string $userPrenom): self
    {
        $this->userPrenom = $userPrenom;

        return $this;
    }

    public function getUserRoles(): ?array
    {
        return $this->userRoles;
    }

    public function setUserRoles(array $userRoles): self
    {
        $this->userRoles = $userRoles;

        return $this;
    }


}
