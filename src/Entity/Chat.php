<?php

namespace App\Entity;

use App\Repository\ChatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChatRepository::class)]
class Chat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Id_conv = null;

    #[ORM\ManyToOne(targetEntity: Profil::class, inversedBy: 'Id_profil')]
    private ?Profil $Id_P1 = null;

    #[ORM\ManyToOne(targetEntity: Profil::class, inversedBy: 'Id_profil')]
    private ?Profil $Id_P2 = null;

    #[ORM\Column(length: 255)]
    private ?string $contenue = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_envoie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdConv(): ?int
    {
        return $this->Id_conv;
    }

    public function setIdConv(int $Id_conv): static
    {
        $this->Id_conv = $Id_conv;

        return $this;
    }

    public function getIdP1(): ?int
    {
        return $this->Id_P1;
    }

    public function setIdP1(Profil $Id_P1): static
    {
        $this->Id_P1 = $Id_P1;

        return $this;
    }

    public function getIdP2(): ?int
    {
        return $this->Id_P2;
    }

    public function setIdP2(Profil $Id_P2): static
    {
        $this->Id_P2 = $Id_P2;

        return $this;
    }

    public function getContenue(): ?string
    {
        return $this->contenue;
    }

    public function setContenue(string $contenue): static
    {
        $this->contenue = $contenue;

        return $this;
    }

    public function getDateEnvoie(): ?\DateTimeInterface
    {
        return $this->date_envoie;
    }

    public function setDateEnvoie(\DateTimeInterface $date_envoie): static
    {
        $this->date_envoie = $date_envoie;

        return $this;
    }
}
