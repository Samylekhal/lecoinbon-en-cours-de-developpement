<?php

namespace App\Entity;

use App\Repository\BloqueETsignaleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BloqueETsignaleRepository::class)]
class BloqueETsignale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Profil::class, inversedBy: 'Id_profil')]
    private ?Profil $Id_envoie = null;

    #[ORM\ManyToOne(targetEntity: Profil::class, inversedBy: 'Id_profil')]
    private ?Profil $id_blosig = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEnvoie(): ?int
    {
        return $this->Id_envoie;
    }

    public function setIdEnvoie(Profil $Id_envoie): static
    {
        $this->Id_envoie = $Id_envoie;

        return $this;
    }

    public function getIdBlosig(): ?int
    {
        return $this->id_blosig;
    }

    public function setIdBlosig(Profil $id_blosig): static
    {
        $this->id_blosig = $id_blosig;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }
}
