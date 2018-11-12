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
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomusage;

    /**
     * @ORM\Column(type="date")
     */
    private $datenaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieunaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dptnaissance;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $paysnaissance;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Compte", cascade={"persist", "remove"})
     */
    private $clientCompte;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Contact", cascade={"persist", "remove"})
     */
    private $clientContact;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Demande", mappedBy="demandeClient")
     */
    private $demandes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Vehicule", mappedBy="vehiculeClient")
     */
    private $vehicules;

    public function __construct()
    {
        $this->demandes = new ArrayCollection();
        $this->vehicules = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getNomusage(): ?string
    {
        return $this->nomusage;
    }

    public function setNomusage(string $nomusage): self
    {
        $this->nomusage = $nomusage;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getLieunaissance(): ?string
    {
        return $this->lieunaissance;
    }

    public function setLieunaissance(string $lieunaissance): self
    {
        $this->lieunaissance = $lieunaissance;

        return $this;
    }

    public function getDptnaissance(): ?string
    {
        return $this->dptnaissance;
    }

    public function setDptnaissance(string $dptnaissance): self
    {
        $this->dptnaissance = $dptnaissance;

        return $this;
    }

    public function getPaysnaissance(): ?string
    {
        return $this->paysnaissance;
    }

    public function setPaysnaissance(string $paysnaissance): self
    {
        $this->paysnaissance = $paysnaissance;

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
    public function getDemandes(): Collection
    {
        return $this->demandes;
    }

    public function addDemande(Demande $demande): self
    {
        if (!$this->demandes->contains($demande)) {
            $this->demandes[] = $demande;
            $demande->setDemandeClient($this);
        }

        return $this;
    }

    public function removeDemande(Demande $demande): self
    {
        if ($this->demandes->contains($demande)) {
            $this->demandes->removeElement($demande);
            // set the owning side to null (unless already changed)
            if ($demande->getDemandeClient() === $this) {
                $demande->setDemandeClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Vehicule[]
     */
    public function getVehicules(): Collection
    {
        return $this->vehicules;
    }

    public function addVehicule(Vehicule $vehicule): self
    {
        if (!$this->vehicules->contains($vehicule)) {
            $this->vehicules[] = $vehicule;
            $vehicule->setVehiculeClient($this);
        }

        return $this;
    }

    public function removeVehicule(Vehicule $vehicule): self
    {
        if ($this->vehicules->contains($vehicule)) {
            $this->vehicules->removeElement($vehicule);
            // set the owning side to null (unless already changed)
            if ($vehicule->getVehiculeClient() === $this) {
                $vehicule->setVehiculeClient(null);
            }
        }

        return $this;
    }
}
