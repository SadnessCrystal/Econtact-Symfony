<?php
// src/Entity/Utilisateur.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 * @ORM\Table(name="utilisateur")
 */
class Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_nom;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $nom;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $prenom;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $num;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $email;

    // Getters et setters

    public function getIdNom(): ?int
    {
        return $this->id_nom;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNum(): ?string
    {
        return $this->num;
    }

    public function setNum(string $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
