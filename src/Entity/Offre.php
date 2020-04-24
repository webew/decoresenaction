<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OffreRepository")
 */
class Offre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateOffre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Contrat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Contenu;

    /**
     * @ORM\Column(type="text")
     */
    private $Liens;

    /**
     * @ORM\Column(type="text")
     */
    private $MotCle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateOffre(): ?\DateTimeInterface
    {
        return $this->dateOffre;
    }

    public function setDateOffre(\DateTimeInterface $dateOffre): self
    {
        $this->dateOffre = $dateOffre;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->Entreprise;
    }

    public function setEntreprise(string $Entreprise): self
    {
        $this->Entreprise = $Entreprise;

        return $this;
    }

    public function getContrat(): ?string
    {
        return $this->Contrat;
    }

    public function setContrat(string $Contrat): self
    {
        $this->Contrat = $Contrat;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->Contenu;
    }

    public function setContenu(string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    public function getLiens(): ?string
    {
        return $this->Liens;
    }

    public function setLiens(string $Liens): self
    {
        $this->Liens = $Liens;

        return $this;
    }

    public function getMotCle(): ?string
    {
        return $this->MotCle;
    }

    public function setMotCle(string $MotCle): self
    {
        $this->MotCle = $MotCle;

        return $this;
    }
}
