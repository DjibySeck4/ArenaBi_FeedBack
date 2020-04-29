<?php


/**
 * @Entity @Table(name="tournoiParticipant")
 **/

class TournoiParticipant
{
     /** @Id @Column(type="integer") @GeneratedValue **/
     private $idTournoiParticipant;
    /**
     * @Id
     * @ManyToOne(targetEntity="Lutteur", inversedBy="tournoiParticipant")
     * @JoinColumn(name="idLutteur", referencedColumnName="idLutteur")
     */
    private $idLutteur;
    /**
     * @Id
     * @ManyToOne(targetEntity="TournoiLutte", inversedBy="tournoiParticipant")
     * @JoinColumn(name="idTournoiLutte", referencedColumnName="idTournoiLutte")
     */
    private $idTournoiLutte;
    /**
     * @Id
     * @ManyToOne(targetEntity="TournoiPoule", inversedBy="tournoiParticipant")
     * @JoinColumn(name="idTournoiPoule", referencedColumnName="idTournoiPoule")
     */
    private $idTournoiPoule;


    public function getIdTournoiParticipant()
    {
         return $this->idTournoiParticipant;
    }
    public function setIdTournoiParticipant($idTournoiParticipant)
    {
         $this->idTournoiParticipant = $idTournoiParticipant;
    }

    /**
     * Get the value of idLutteur
     */ 
    public function getIdLutteur()
    {
        return $this->idLutteur;
    }

    /**
     * Set the value of idLutteur
     */ 
    public function setIdLutteur($idLutteur)
    {
        $this->idLutteur = $idLutteur;
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

    
}