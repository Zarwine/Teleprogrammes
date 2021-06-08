<?php

namespace App\Entity;

use App\Repository\ChroniqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChroniqueRepository::class)
 */
class Chronique
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SigneAstro;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Couple;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Vie;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $Conseils;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSigneAstro(): ?string
    {
        return $this->SigneAstro;
    }

    public function setSigneAstro(string $SigneAstro): self
    {
        $this->SigneAstro = $SigneAstro;

        return $this;
    }

    public function getCouple(): ?string
    {
        return $this->Couple;
    }

    public function setCouple(string $Couple): self
    {
        $this->Couple = $Couple;

        return $this;
    }

    public function getVie(): ?string
    {
        return $this->Vie;
    }

    public function setVie(string $Vie): self
    {
        $this->Vie = $Vie;

        return $this;
    }

    public function getConseils(): ?string
    {
        return $this->Conseils;
    }

    public function setConseils(string $Conseils): self
    {
        $this->Conseils = $Conseils;

        return $this;
    }
}
