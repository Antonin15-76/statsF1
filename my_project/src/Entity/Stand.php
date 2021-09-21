<?php

namespace App\Entity;

use App\Repository\StandRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StandRepository::class)
 */
class Stand
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name_ecurie;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pays;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameEcurie(): ?string
    {
        return $this->name_ecurie;
    }

    public function setNameEcurie(string $name_ecurie): self
    {
        $this->name_ecurie = $name_ecurie;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
}
