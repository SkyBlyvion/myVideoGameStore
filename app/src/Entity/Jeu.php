<?php

namespace App\Entity;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(collection="jeux")
 */
class Jeu
{

    /**
     * @MongoDB\Id()
     */
    private string $id; 

    /**
     * @MongoDB\Field(type="string")
     */
    private string $titre;

    /**
     * @MongoDB\Field(type="string")
     */
    private string $synopsis;

    /**
     * @MongoDB\Field(type="int")
     */
    private int $pegi;

    /**
     * @MongoDB\Field(type="date") 
     */
    private \DateTime $date;    
    

    /**
     * Get the value of id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Get the value of titre
     *
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param string $titre
     *
     * @return self
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of synopsis
     *
     * @return string
     */
    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    /**
     * Set the value of synopsis
     *
     * @param string $synopsis
     *
     * @return self
     */
    public function setSynopsis(string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get the value of pegi
     *
     * @return int
     */
    public function getPegi(): int
    {
        return $this->pegi;
    }

    /**
     * Set the value of pegi
     *
     * @param int $pegi
     *
     * @return self
     */
    public function setPegi(int $pegi): self
    {
        $this->pegi = $pegi;

        return $this;
    }

    /**
     * Get the value of date
     *
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }
}