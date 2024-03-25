<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NoteRepository::class)]
class Note
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Profil::class, inversedBy: 'Id_profil')]
    private ?Profil $Id_vendeur = null;

    #[ORM\Column]
    private ?float $notesur5 = null;

    #[ORM\ManyToOne(targetEntity: Profil::class, inversedBy: 'Id_profil')]
    private ?Profil $Id_notateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVendeur(): ?int
    {
        return $this->Id_vendeur;
    }

    public function setIdVendeur(Profil $Id_vendeur): static
    {
        $this->Id_vendeur = $Id_vendeur;

        return $this;
    }

    public function getNotesur5(): ?float
    {
        return $this->notesur5;
    }

    public function setNotesur5(float $notesur5): static
    {
        $this->notesur5 = $notesur5;

        return $this;
    }

    public function getIdNotateur(): ?int
    {
        return $this->Id_notateur;
    }

    public function setIdNotateur(Profil $Id_notateur): static
    {
        $this->Id_notateur = $Id_notateur;

        return $this;
    }
}
