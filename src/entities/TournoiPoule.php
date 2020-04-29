<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="tournoiPoule")
 **/

class TournoiPoule
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idTournoiPoule;
    /** @column(type="string", nullable=false) */
    private $nomTournoiPoule;
    /** @column(type="string" , length=10, nullable=false) */
    private $dateDebut;
    /** @column(type="string" , length=10, nullable=false) */
    private $dateFin;
    /**
     * @OneToMany(targetEntity="tournoiParticipant", mappedBy="tournoiPoule")
     **/
    private $lutteurs;

    public function __construct()
    {
        $this->lutteurs = new ArrayCollection();
    }
    

    /**
     * Get the value of idTournoiPoule
     */ 
    public function getIdTournoiPoule()
    {
        return $this->idTournoiPoule;
    }

    /**
     * Set the value of idTournoiPoule
     */ 
    public function setIdTournoiPoule($idTournoiPoule)
    {
        $this->idTournoiPoule = $idTournoiPoule;
    }

    /**
     * Get the value of nomTournoiPoule
     */ 
    public function getNomTournoiPoule()
    {
        return $this->nomTournoiPoule;
    }

    /**
     * Set the value of nomTournoiPoule
     */ 
    public function setNomTournoiPoule($nomTournoiPoule)
    {
        $this->nomTournoiPoule = $nomTournoiPoule;
    }

    /**
     * Get the value of dateDebut
     */ 
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set the value of dateDebut
     */ 
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * Get the value of dateFin
     */ 
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set the value of dateFin
     */ 
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * Get the value of lutteurs
     */ 
    public function getLutteurs()
    {
        return $this->lutteurs;
    }

    /**
     * Set the value of lutteurs
     */ 
    public function setLutteurs($lutteurs)
    {
        $this->lutteurs = $lutteurs;
    }
}