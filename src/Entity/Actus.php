<?php

namespace App\Entity;

use App\Repository\ActusRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActusRepository::class)
 */
class Actus
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $titreActus;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $contenuActus;

    /**
     * @var DateTime
     * @ORM\Column(type="date")
     */
    private $dateActus;

    /**
     * @param int $id
     * @param string $titreActus
     * @param string $contenuActus
     * @param DateTime $dateActus
     */
    public function __construct(string $titreActus, string $contenuActus, DateTime $dateActus)
    {
        $this->titreActus = $titreActus;
        $this->contenuActus = $contenuActus;
        $this->dateActus = $dateActus;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getTitreActus(): string
    {
        return $this->titreActus;
    }

    public function setTitreActus(string $titreActus): self
    {
        $this->titreActus = $titreActus;

        return $this;
    }

    public function getContenuActus(): string
    {
        return $this->contenuActus;
    }

    public function setContenuActus(string $contenuActus): self
    {
        $this->contenuActus = $contenuActus;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateActus(): DateTime
    {
        return $this->dateActus;
    }

    /**
     * @param DateTime $dateActus
     */
    public function setDateActus(DateTime $dateActus): void
    {
        $this->dateActus = $dateActus;
    }
}
