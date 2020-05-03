<?php

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity @Table(name="arbitre")  */

class Arbitre 
{

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idArbitre;

    /**
     * @OneToOne(targetEntity="Personne",cascade={"persist"})
     * @JoinColumn(name="idPersonne", referencedColumnName="idPersonne")
     */
    private $personne;
    
    /**
     * @ManyToMany(targetEntity="Combat", mappedBy="arbitre")
     **/
    private $combats;

    public function __construct() 
    {
        $this->combats = new ArrayCollection();
    }
    
    /**
     * Get the value of idArbitre
     */ 
    public function getIdArbitre()
    {
        return $this->idArbitre;
    }

    /**
     * Set the value of idArbitre
     */ 
    public function setIdArbitre($idArbitre)
    {
        $this->idArbitre = $idArbitre;
    }

    /**
     * Get the value of personne
     */ 
    public function getPersonne()
    {
        return $this->personne;
    }

    /**
     * Set the value of personne
     */ 
    public function setPersonne($personne)
    {
        $this->personne = $personne;
    }

    /**
     * Get the value of combats
     */ 
    public function getCombats()
    {
        return $this->combats;
    }

    public function addCombat(Combat $combat)
    {
        if ($this->combats->contains($combat)) {
            return;
        }
        $combat->addArbitre($this);
        $this->combats[] = $combat;
    }

    /**
     * Set the value of combats
     */ 
    public function setCombats($combats)
    {
        $this->combats = $combats;
    }
}