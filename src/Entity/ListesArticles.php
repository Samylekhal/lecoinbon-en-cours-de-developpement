<?php

namespace App\Entity;

use App\Repository\ListesArticlesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListesArticlesRepository::class)]
class ListesArticles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: Profil::class)]
    private ?int $Id_profil = null;

    #[ORM\Column]
    private ?int $Id_article = null;

    #[ORM\Column(length: 255)]
    private ?string $Type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProfil(): ?int
    {
        return $this->Id_profil;
    }

    public function setIdProfil(int $Id_profil): static
    {
        $this->Id_profil = $Id_profil;

        return $this;
    }

    public function getIdArticle(): ?int
    {
        return $this->Id_article;
    }

    public function setIdArticle(int $Id_article): static
    {
        $this->Id_article = $Id_article;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): static
    {
        $this->Type = $Type;

        return $this;
    }
}
