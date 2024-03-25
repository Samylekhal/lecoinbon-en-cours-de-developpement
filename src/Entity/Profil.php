<?php


use App\Form\InscriptionType;
use App\Repository\ProfilRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfilRepository::class)]
class Profil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: Article::class)]
    private ?int $Id_profil = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    private ?string $Mdp = null;

    #[ORM\Column(nullable: true)]
    private ?float $Note = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private $Photo;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $Statut = null;

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
        $this->setIdProfil($Id_profil);

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

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->Mdp;
    }

    public function setMdp(string $Mdp): static
    {
        $this->Mdp = $Mdp;

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

    public function getPhoto()
    {
        return $this->Photo;
    }

    public function setPhoto($Photo): static
    {
        $this->Photo = $Photo;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->Statut;
    }

    public function setStatut(int $Statut): static
    {
        $this->Statut = $Statut;

        return $this;
    }
}

