<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="tournoiLutte")
 **/

class TournoiLutte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idTournoiLutte;
    /** @column(type="string", nullable=false) */
    private $nomTournoi;
    /** @column(type="string" , length=10, nullable=false) */
    private $dateDebut;
    /** @column(type="string" , length=10, nullable=false) */
    private $dateFin;
    /**
     * @ManyToOne(targetEntity="Promoteur", inversedBy="tournoiLutte")
     * @JoinColumn(name="idPromoteur", referencedColumnName="idPromoteur")
     */
    private $promoteur;
    /**
     * @OneToMany(targetEntity="Combat", mappedBy="tournoiLutte")
     **/
    private $combats;
    /**
     * @OneToMany(targetEntity="TournoiParticipant", mappedBy="tournoiLutte")
     **/
    private $participants;

    public function __construct()
    {
        $this->combats = new ArrayCollection();
        $this->participants = new ArrayCollection();
    }

    /**
     * Get the value of idTournoiLutte
     */ 
    public function getIdTournoiLutte()
    {
        return $this->idTournoiLutte;
    }

    /**
     * Set the value of idTournoiLutte
     */ 
    public function setIdTournoiLutte($idTournoiLutte)
    {
        $this->idTournoiLutte = $idTournoiLutte;
    }

    /**
     * Get the value of nomTournoi
     */ 
    public function getNomTournoi()
    {
        return $this->nomTournoi;
    }

    /**
     * Set the value of nomTournoi
     */ 
    public function setNomTournoi($nomTournoi)
    {
        $this->nomTournoi = $nomTournoi;
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
     * Get the value of participants
     */ 
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Set the value of participants
     */ 
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    }

    /**
     * Get the value of promoteur
     */ 
    public function getPromoteur()
    {
        return $this->promoteur;
    }

    /**
     * Set the value of promoteur
     */ 
    public function setPromoteur($promoteur)
    {
        $this->promoteur = $promoteur;
    }
}
?>