<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvisRepository::class)
 */
class Avis
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
     * @ORM\Column(type="string", length=255)
     */
    private $auteurAvis;

    /**
     * @var float
     * @ORM\Column(type="float")
     */
    private $noteAvis;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $contenuAvis;

    /**
     * @var DateTime
     * @ORM\Column(type="date")
     */
    private $dateAvis;

    /**
     * @param string $auteurAvis
     * @param float $noteAvis
     * @param string $contenuAvis
     * @param DateTime $dateAvis
     */
    public function __construct(string $auteurAvis, float $noteAvis, string $contenuAvis, DateTime $dateAvis)
    {
        $this->auteurAvis = $auteurAvis;
        $this->noteAvis = $noteAvis;
        $this->contenuAvis = $contenuAvis;
        $this->dateAvis = $dateAvis;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getAuteurAvis(): string
    {
        return $this->auteurAvis;
    }

    public function setAuteurAvis(string $auteurAvis): self
    {
        $this->auteurAvis = $auteurAvis;

        return $this;
    }

    public function getNoteAvis(): float
    {
        return $this->noteAvis;
    }

    public function setNoteAvis(float $noteAvis): self
    {
        $this->noteAvis = $noteAvis;

        return $this;
    }

    public function getContenuAvis(): string
    {
        return $this->contenuAvis;
    }

    /**
     * @param string $contenuAvis
     * @return $this
     */
    public function setContenuAvis(string $contenuAvis): self
    {
        $this->contenuAvis = $contenuAvis;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateAvis(): DateTime
    {
        return $this->dateAvis;
    }

    /**
     * @param DateTime $dateAvis
     */
    public function setDateAvis(DateTime $dateAvis): void
    {
        $this->dateAvis = $dateAvis;
    }




}
