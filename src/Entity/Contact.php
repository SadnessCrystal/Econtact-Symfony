<?php
// src/Entity/Contact.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 * @ORM\Table(name="contact")
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id_nom;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id_contact;

    // Autres propriétés et méthodes d'accès

    public function getIdNom(): ?int
    {
        return $this->id_nom;
    }

    public function setIdNom(int $id_nom): self
    {
        $this->id_nom = $id_nom;

        return $this;
    }

    public function getIdContact(): ?int
    {
        return $this->id_contact;
    }

    public function setIdContact(int $id_contact): self
    {
        $this->id_contact = $id_contact;

        return $this;
    }
}
