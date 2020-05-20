<?php

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity @Table(name="consultant")  */

class Consultant
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idConsultant;

    /**
     * @OneToOne(targetEntity="Personne",cascade={"persist"})
     * @JoinColumn(name="idPersonne", referencedColumnName="idPersonne")
     */
    private $personne;

    /**
     * @ManyToMany(targetEntity="Combat", mappedBy="consultant")
     **/
    private $combats;

    public function __construct()
    {
        $this->combats = new ArrayCollection();
    }


    public function getIdConsultant()
    {
        return $this->idConsultant;
    }
    public function setIdConsultant($idConsultant)
    {
        $this->idConsultant = $idConsultant;
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
     * Get the value of descriptionConsultant
     */ 
    public function getDescriptionConsultant()
    {
        return $this->descriptionConsultant;
    }

    /**
     * Set the value of descriptionConsultant
     */ 
    public function setDescriptionConsultant($descriptionConsultant)
    {
        $this->descriptionConsultant = $descriptionConsultant;
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
        $combat->addConsultant($this);
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