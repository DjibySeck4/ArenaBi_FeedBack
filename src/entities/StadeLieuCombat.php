<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="stadeLieuCombat")
 **/
class StadeLieuCombat
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idLieuStade;
    /**
     * @OneToMany(targetEntity="Combat", mappedBy="stadeLieuCombat")
     **/
    private $combats;
    /** @Column(type="string", length=30, nullable=false) **/
    private $nomLieu;
    /** @Column(type="string", length=20, nullable=false) **/
    private $ville;
    /**  @Column(type="string") **/
    private $description;


    public function __construct()
    {
        $this->combats = new ArrayCollection();
    }

    /**
     * Get the value of idLieuStade
     */ 
    public function getIdLieuStade()
    {
        return $this->idLieuStade;
    }

    /**
     * Set the value of idLieuStade
     */ 
    public function setIdLieuStade($idLieuStade)
    {
        $this->idLieuStade = $idLieuStade;
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
     * Get the value of nomLieu
     */ 
    public function getNomLieu()
    {
        return $this->nomLieu;
    }

    /**
     * Set the value of nomLieu
     */ 
    public function setNomLieu($nomLieu)
    {
        $this->nomLieu = $nomLieu;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;
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
?> 