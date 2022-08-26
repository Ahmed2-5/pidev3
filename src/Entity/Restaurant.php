<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RestaurantRepository::class)
 */
class Restaurant
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_ouvert;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_fermet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $architechture;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_tel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $Id): self
    {
        $this->Id = $Id;

        return $this;
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

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getHeureOuvert(): ?\DateTimeInterface
    {
        return $this->heure_ouvert;
    }

    public function setHeureOuvert(\DateTimeInterface $heure_ouvert): self
    {
        $this->heure_ouvert = $heure_ouvert;

        return $this;
    }

    public function getHeureFermet(): ?\DateTimeInterface
    {
        return $this->heure_fermet;
    }

    public function setHeureFermet(\DateTimeInterface $heure_fermet): self
    {
        $this->heure_fermet = $heure_fermet;

        return $this;
    }

    public function getArchitechture(): ?string
    {
        return $this->architechture;
    }

    public function setArchitechture(string $architechture): self
    {
        $this->architechture = $architechture;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->num_tel;
    }

    public function setNumTel(int $num_tel): self
    {
        $this->num_tel = $num_tel;

        return $this;
    }
}
