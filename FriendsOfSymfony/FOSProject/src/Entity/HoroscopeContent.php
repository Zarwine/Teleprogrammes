<?php

namespace App\Entity;

use App\Repository\HoroscopeContentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HoroscopeContentRepository::class)
 */
class HoroscopeContent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $votreCouple;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $votreVieSolo;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $conseilsAmoureux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVotreCouple(): ?string
    {
        return $this->votreCouple;
    }

    public function setVotreCouple(string $votreCouple): self
    {
        $this->votreCouple = $votreCouple;

        return $this;
    }

    public function getVotreVieSolo(): ?string
    {
        return $this->votreVieSolo;
    }

    public function setVotreVieSolo(string $votreVieSolo): self
    {
        $this->votreVieSolo = $votreVieSolo;

        return $this;
    }

    public function getConseilsAmoureux(): ?string
    {
        return $this->conseilsAmoureux;
    }

    public function setConseilsAmoureux(string $conseilsAmoureux): self
    {
        $this->conseilsAmoureux = $conseilsAmoureux;

        return $this;
    }
}
