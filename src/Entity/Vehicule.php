<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VehiculeRepository")
 */
class Vehicule
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $cgpresent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $immatriculation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vin;

    /**
     * @ORM\Column(type="integer")
     */
    private $numformule;

    /**
     * @ORM\Column(type="date")
     */
    private $datecg;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Ancientitulaire", cascade={"persist", "remove"})
     */
    private $vehiculeAncientitulaire;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Adresse", cascade={"persist", "remove"})
     */
    private $vehiculeAdresse;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Cartegrise", cascade={"persist", "remove"})
     */
    private $vehiculeCartegrise;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Demande", cascade={"persist", "remove"})
     */
    private $vehiculeDemande;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="vehicules")
     */
    private $vehiculeClient;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="clientVehicule")
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCgpresent(): ?string
    {
        return $this->cgpresent;
    }

    public function setCgpresent(string $cgpresent): self
    {
        $this->cgpresent = $cgpresent;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(string $vin): self
    {
        $this->vin = $vin;

        return $this;
    }

    public function getNumformule(): ?int
    {
        return $this->numformule;
    }

    public function setNumformule(int $numformule): self
    {
        $this->numformule = $numformule;

        return $this;
    }

    public function getDatecg(): ?\DateTimeInterface
    {
        return $this->datecg;
    }

    public function setDatecg(\DateTimeInterface $datecg): self
    {
        $this->datecg = $datecg;

        return $this;
    }

    public function getVehiculeAncientitulaire(): ?Ancientitulaire
    {
        return $this->vehiculeAncientitulaire;
    }

    public function setVehiculeAncientitulaire(?Ancientitulaire $vehiculeAncientitulaire): self
    {
        $this->vehiculeAncientitulaire = $vehiculeAncientitulaire;

        return $this;
    }

    public function getVehiculeAdresse(): ?Adresse
    {
        return $this->vehiculeAdresse;
    }

    public function setVehiculeAdresse(?Adresse $vehiculeAdresse): self
    {
        $this->vehiculeAdresse = $vehiculeAdresse;

        return $this;
    }

    public function getVehiculeCartegrise(): ?Cartegrise
    {
        return $this->vehiculeCartegrise;
    }

    public function setVehiculeCartegrise(?Cartegrise $vehiculeCartegrise): self
    {
        $this->vehiculeCartegrise = $vehiculeCartegrise;

        return $this;
    }

    public function getVehiculeDemande(): ?Demande
    {
        return $this->vehiculeDemande;
    }

    public function setVehiculeDemande(?Demande $vehiculeDemande): self
    {
        $this->vehiculeDemande = $vehiculeDemande;

        return $this;
    }

    public function getVehiculeClient(): ?Client
    {
        return $this->vehiculeClient;
    }

    public function setVehiculeClient(?Client $vehiculeClient): self
    {
        $this->vehiculeClient = $vehiculeClient;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}
