<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telmobile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telfixe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelmobile(): ?string
    {
        return $this->telmobile;
    }

    public function setTelmobile(string $telmobile): self
    {
        $this->telmobile = $telmobile;

        return $this;
    }

    public function getTelfixe(): ?string
    {
        return $this->telfixe;
    }

    public function setTelfixe(?string $telfixe): self
    {
        $this->telfixe = $telfixe;

        return $this;
    }
}
