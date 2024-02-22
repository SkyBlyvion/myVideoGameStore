<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


#[MongoDB\Document(collection: "jeux")]
class Jeu
{

    #[MongoDB\Id]
    private string $id; 

    #[MongoDB\Field(type: 'string')]
    private string $titre;

    #[MongoDB\Field(type: 'string')]
    private string $synopsis;

    #[MongoDB\Field(type: 'int')]
    private int $pegi;

    #[MongoDB\Field(type: 'date')]
    private \DateTime $date;    
    
    public function getId(): string
    {
        return $this->id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getPegi(): int
    {
        return $this->pegi;
    }

    public function setPegi(int $pegi): self
    {
        $this->pegi = $pegi;

        return $this;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }
}