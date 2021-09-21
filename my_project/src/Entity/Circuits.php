<?php

namespace App\Entity;

use App\Repository\CircuitsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CircuitsRepository::class)
 */
class Circuits
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $id_order_circuit;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom_circuit;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pays_circuit;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $historique;

    /**
     * @ORM\Column(type="text")
     */
    private $description_circuit;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $type_circuit;

    /**
     * @ORM\Column(type="date")
     */
    private $ouverture;

    /**
     * @ORM\Column(type="float")
     */
    private $capacity;

    /**
     * @ORM\Column(type="float")
     */
    private $nb_virages;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $longueur;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $sens;

    /**
     * @ORM\Column(type="time")
     */
    private $time;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pilote;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $stand;

    /**
     * @ORM\Column(type="text")
     */
    private $lieu;

    /**
     * @ORM\Column(type="float")
     */
    private $year_best_time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdOrderCircuit(): ?int
    {
        return $this->id_order_circuit;
    }

    public function setIdOrderCircuit(?int $id_order_circuit): self
    {
        $this->id_order_circuit = $id_order_circuit;

        return $this;
    }

    public function getNomCircuit(): ?string
    {
        return $this->nom_circuit;
    }

    public function setNomCircuit(string $nom_circuit): self
    {
        $this->nom_circuit = $nom_circuit;

        return $this;
    }

    public function getPaysCircuit(): ?string
    {
        return $this->pays_circuit;
    }

    public function setPaysCircuit(string $pays_circuit): self
    {
        $this->pays_circuit = $pays_circuit;

        return $this;
    }

    public function getHistorique(): ?string
    {
        return $this->historique;
    }

    public function setHistorique(?string $historique): self
    {
        $this->historique = $historique;

        return $this;
    }

    public function getDescriptionCircuit(): ?string
    {
        return $this->description_circuit;
    }

    public function setDescriptionCircuit(string $description_circuit): self
    {
        $this->description_circuit = $description_circuit;

        return $this;
    }

    public function getTypeCircuit(): ?string
    {
        return $this->type_circuit;
    }

    public function setTypeCircuit(string $type_circuit): self
    {
        $this->type_circuit = $type_circuit;

        return $this;
    }

    public function getOuverture(): ?\DateTimeInterface
    {
        return $this->ouverture;
    }

    public function setOuverture(\DateTimeInterface $ouverture): self
    {
        $this->ouverture = $ouverture;

        return $this;
    }

    public function getCapacity(): ?float
    {
        return $this->capacity;
    }

    public function setCapacity(float $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getNbVirages(): ?float
    {
        return $this->nb_virages;
    }

    public function setNbVirages(float $nb_virages): self
    {
        $this->nb_virages = $nb_virages;

        return $this;
    }

    public function getLongueur(): ?string
    {
        return $this->longueur;
    }

    public function setLongueur(string $longueur): self
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getSens(): ?string
    {
        return $this->sens;
    }

    public function setSens(string $sens): self
    {
        $this->sens = $sens;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getPilote(): ?string
    {
        return $this->pilote;
    }

    public function setPilote(string $pilote): self
    {
        $this->pilote = $pilote;

        return $this;
    }

    public function getStand(): ?string
    {
        return $this->stand;
    }

    public function setStand(string $stand): self
    {
        $this->stand = $stand;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getYearBestTime(): ?float
    {
        return $this->year_best_time;
    }

    public function setYearBestTime(float $year_best_time): self
    {
        $this->year_best_time = $year_best_time;

        return $this;
    }
}
