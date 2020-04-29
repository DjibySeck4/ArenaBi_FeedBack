<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="journeeLutte")
 **/
class JourneeLutte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idJourneeLutte;
    /**
     * @OneToMany(targetEntity="Combat", mappedBy="journeeLutte")
     **/
    private $combats;
    /** @Column(type="string", length=10, nullable=false) **/
    private $dateJournee;
    /** @Column(type="string", length=20, nullable=false) **/
    private $lettreNumJouneeA_Z;
    /** @Column(type="integer") **/
    private $numJourneeDeLaSaison;
    /**  @Column(type="string") **/
    private $description;


    public function __construct()
    {
        $this->combats = new ArrayCollection();
    }

    /**
     * Get the value of idJourneeLutte
     */ 
    public function getIdJourneeLutte()
    {
        return $this->idJourneeLutte;
    }

    /**
     * Set the value of idJourneeLutte
     */ 
    public function setIdJourneeLutte($idJourneeLutte)
    {
        $this->idJourneeLutte = $idJourneeLutte;
    }

    /**
     * Get the value of combats
     */ 
    public function getCombats()
    {
        return $this->combats;
    }

    /**
     * Set the value of combats
     */ 
    public function setCombats($combats)
    {
        $this->combats = $combats;
    }

    /**
     * Get the value of dateJournee
     */ 
    public function getDateJournee()
    {
        return $this->dateJournee;
    }

    /**
     * Set the value of dateJournee
     */ 
    public function setDateJournee($dateJournee)
    {
        $this->dateJournee = $dateJournee;
    }

    /**
     * Get the value of lettreNumJouneeA_Z
     */ 
    public function getLettreNumJouneeA_Z()
    {
        return $this->lettreNumJouneeA_Z;
    }

    /**
     * Set the value of lettreNumJouneeA_Z
     */ 
    public function setLettreNumJouneeA_Z($lettreNumJouneeA_Z)
    {
        $this->lettreNumJouneeA_Z = $lettreNumJouneeA_Z;
    }

    /**
     * Get the value of numJourneeDeLaSaison
     */ 
    public function getNumJourneeDeLaSaison()
    {
        return $this->numJourneeDeLaSaison;
    }

    /**
     * Set the value of numJourneeDeLaSaison
     */ 
    public function setNumJourneeDeLaSaison($numJourneeDeLaSaison)
    {
        $this->numJourneeDeLaSaison = $numJourneeDeLaSaison;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */ 
    public function setDescription($description)
    {
        $this->description = $description;
    }
}