<?php

namespace App\Entity;

use App\Repository\SoutenanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SoutenanceRepository::class)]
class Soutenance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

     #[ORM\ManyToOne]
     #[ORM\JoinColumn]
     private ?Enseignant $idEnseignant = null;
     
    public function getIdEnseignant(): ?Enseignant
    {
        return $this->idEnseignant;
    }
    public function setIdEnseignant(?Enseignant $idEnseignant): void
    {
        $this->idEnseignant = $idEnseignant;
    }

    public function getIdf(): ?Etudiant
    {
        return $this->idf;
    }


    public function setIdf(?Etudiant $idf): void
    {
        $this->idf = $idf;
    }
     #[ORM\ManyToOne]
     #[ORM\JoinColumn]
     private ?Etudiant $idf = null;

    #[ORM\Column]
    private ?int $numjury = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateSoutenance = null;

    #[ORM\Column(nullable: true)]
    private ?float $Note = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumjury(): ?int
    {
        return $this->numjury;
    }

    public function setNumjury(int $numjury): static
    {
        $this->numjury = $numjury;

        return $this;
    }

    public function getDateSoutenance(): ?\DateTimeInterface
    {
        return $this->dateSoutenance;
    }

    public function setDateSoutenance(?\DateTimeInterface $dateSoutenance): static
    {
        $this->dateSoutenance = $dateSoutenance;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->Note;
    }

    public function setNote(?float $Note): static
    {
        $this->Note = $Note;

        return $this;
    }

}
