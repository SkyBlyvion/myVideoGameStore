<?php

namespace App\Entity;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(collection="jeux")
 */
class Jeu
{
    

    private string $id; 

    private string $titre;

    private string $synopsis;

    private string $pegi;

    private \DateTime $date;
}