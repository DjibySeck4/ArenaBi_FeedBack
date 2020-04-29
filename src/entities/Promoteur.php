<?php

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity @Table(name="promoteur") */

class Promoteur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idPromoteur;

    /**
     * @OneToOne(targetEntity="Personne",cascade={"persist"})
     * @JoinColumn(name="idPersonne", referencedColumnName="idPersonne")
     */
    private $personne;
    /** @column(type="string", length=20, nullable=false) */
    private $nomStructure;
    /** @column(type="string", length=100, nullable=false) */
    private $descriptionPromoteur;
    /**
     * @OneToMany(targetEntity="Combat", mappedBy="promoteur")
     **/
    private $combats;
    /**
     * @OneToMany(targetEntity="TournoiLutte", mappedBy="promoteur")
     **/
    private $tournoiLuttes;

    public function __construct()
    {
        $this->combats = new ArrayCollection();
        $this->tournoiLuttes = new ArrayCollection();
    }    

    /**
     * Get the value of idPromoteur
     */ 
    public function getIdPromoteur()
    {
        return $this->idPromoteur;
    }

    /**
     * Set the value of idPromoteur
     */ 
    public function setIdPromoteur($idPromoteur)
    {
        $this->idPromoteur = $idPromoteur;
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
     * Get the value of nomStructure
     */ 
    public function getNomStructure()
    {
        return $this->nomStructure;
    }

    /**
     * Set the value of nomStructure
     */ 
    public function setNomStructure($nomStructure)
    {
        $this->nomStructure = $nomStructure;
    }

    /**
     * Get the value of descriptionPromoteur
     */ 
    public function getDescriptionPromoteur()
    {
        return $this->descriptionPromoteur;
    }

    /**
     * Set the value of descriptionPromoteur
     */ 
    public function setDescriptionPromoteur($descriptionPromoteur)
    {
        $this->descriptionPromoteur = $descriptionPromoteur;
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
     * Get the value of tournoiLuttes
     */ 
    public function getTournoiLuttes()
    {
        return $this->tournoiLuttes;
    }

    /**
     * Set the value of tournoiLuttes
     */ 
    public function setTournoiLuttes($tournoiLuttes)
    {
        $this->tournoiLuttes = $tournoiLuttes;
    }
}