<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\BlobType;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Id_article = null;

    #[ORM\ManyToMany(targetEntity: ListesArticles::class)]
    private ?Profil $Id_vendeur = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Tag = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private ?BlobType $Photo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column]
    private ?float $Prix = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $DatePost = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdVendeur(): ?int
    {
        return $this->Id_vendeur;
    }

    public function setIdVendeur(int $Id_vendeur): static
    {
        $this->Id_vendeur = $Id_vendeur instanceof Profil ? $Id_vendeur : null;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->Tag;
    }

    public function setTag(?string $Tag): static
    {
        $this->Tag = $Tag;

        return $this;
    }

    public function getPhoto(): ?BlobType
    {
        return $this->Photo;
    }

    public function setPhoto(?BlobType $Photo): static
    {
        $this->Photo = $Photo;

        return $this;
    }
    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): static
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getDatePost(): ?\DateTimeInterface
    {
        return $this->DatePost;
    }

    public function setDatePost(\DateTimeInterface $DatePost): static
    {
        $this->DatePost = $DatePost;

        return $this;
    }
}
