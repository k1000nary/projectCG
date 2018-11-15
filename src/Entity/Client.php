<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
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
    private $clientNom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clientPrenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clientGenre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clientNomUsage;

    /**
     * @ORM\Column(type="date")
     */
    private $clientDateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clientLieuNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clientDptNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clientPaysNaissance;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Compte", cascade={"persist", "remove"})
     */
    private $clientCompte;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Contact", cascade={"persist", "remove"})
     */
    private $clientContact;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Demande", mappedBy="client")
     */
    private $clientDemande;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Vehicule", mappedBy="client")
     */
    private $clientVehicule;

    public function __construct()
    {
        $this->clientDemande = new ArrayCollection();
        $this->clientVehicule = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientNom(): ?string
    {
        return $this->clientNom;
    }

    public function setClientNom(string $clientNom): self
    {
        $this->clientNom = $clientNom;

        return $this;
    }

    public function getClientPrenom(): ?string
    {
        return $this->clientPrenom;
    }

    public function setClientPrenom(string $clientPrenom): self
    {
        $this->clientPrenom = $clientPrenom;

        return $this;
    }

    public function getClientGenre(): ?string
    {
        return $this->clientGenre;
    }

    public function setClientGenre(string $clientGenre): self
    {
        $this->clientGenre = $clientGenre;

        return $this;
    }

    public function getClientNomUsage(): ?string
    {
        return $this->clientNomUsage;
    }

    public function setClientNomUsage(string $clientNomUsage): self
    {
        $this->clientNomUsage = $clientNomUsage;

        return $this;
    }

    public function getClientDateNaissance(): ?\DateTimeInterface
    {
        return $this->clientDateNaissance;
    }

    public function setClientDateNaissance(\DateTimeInterface $clientDateNaissance): self
    {
        $this->clientDateNaissance = $clientDateNaissance;

        return $this;
    }

    public function getClientLieuNaissance(): ?string
    {
        return $this->clientLieuNaissance;
    }

    public function setClientLieuNaissance(string $clientLieuNaissance): self
    {
        $this->clientLieuNaissance = $clientLieuNaissance;

        return $this;
    }

    public function getClientDptNaissance(): ?string
    {
        return $this->clientDptNaissance;
    }

    public function setClientDptNaissance(string $clientDptNaissance): self
    {
        $this->clientDptNaissance = $clientDptNaissance;

        return $this;
    }

    public function getClientPaysNaissance(): ?string
    {
        return $this->clientPaysNaissance;
    }

    public function setClientPaysNaissance(string $clientPaysNaissance): self
    {
        $this->clientPaysNaissance = $clientPaysNaissance;

        return $this;
    }

    public function getClientCompte(): ?Compte
    {
        return $this->clientCompte;
    }

    public function setClientCompte(?Compte $clientCompte): self
    {
        $this->clientCompte = $clientCompte;

        return $this;
    }

    public function getClientContact(): ?Contact
    {
        return $this->clientContact;
    }

    public function setClientContact(?Contact $clientContact): self
    {
        $this->clientContact = $clientContact;

        return $this;
    }

    /**
     * @return Collection|Demande[]
     */
    public function getClientDemande(): Collection
    {
        return $this->clientDemande;
    }

    public function addClientDemande(Demande $clientDemande): self
    {
        if (!$this->clientDemande->contains($clientDemande)) {
            $this->clientDemande[] = $clientDemande;
            $clientDemande->setClient($this);
        }

        return $this;
    }

    public function removeClientDemande(Demande $clientDemande): self
    {
        if ($this->clientDemande->contains($clientDemande)) {
            $this->clientDemande->removeElement($clientDemande);
            // set the owning side to null (unless already changed)
            if ($clientDemande->getClient() === $this) {
                $clientDemande->setClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Vehicule[]
     */
    public function getClientVehicule(): Collection
    {
        return $this->clientVehicule;
    }

    public function addClientVehicule(Vehicule $clientVehicule): self
    {
        if (!$this->clientVehicule->contains($clientVehicule)) {
            $this->clientVehicule[] = $clientVehicule;
            $clientVehicule->setClient($this);
        }

        return $this;
    }

    public function removeClientVehicule(Vehicule $clientVehicule): self
    {
        if ($this->clientVehicule->contains($clientVehicule)) {
            $this->clientVehicule->removeElement($clientVehicule);
            // set the owning side to null (unless already changed)
            if ($clientVehicule->getClient() === $this) {
                $clientVehicule->setClient(null);
            }
        }

        return $this;
    }
}
