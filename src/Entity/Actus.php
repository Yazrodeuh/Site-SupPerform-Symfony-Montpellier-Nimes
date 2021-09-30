<?php

namespace App\Entity;

use App\Repository\ActusRepository;
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
}
