<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="tournoiLutte")
 **/
class TournoiLutte 
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idToirnoi;
    
    /** @Column(type="string", length=50, nullable=true) **/
    private $nomTournoi;

    /** @Column(type="string", length=10, nullable=false) **/
    private $dateDebut; 

    /** @Column(type="boolean", length=10, nullable=false) **/
    private $dateFin;

    /** @Column(type="string", length=50, nullable=true) **/
    private $organisateur;
    
     /**
     * One tournoiLutte has many combats. This is the inverse side.
     * @OneToMany(targetEntity="Combat", mappedBy="tournoiLutte")
     */
    private $combats;

    public function __construct()
    {
        $this->lutteurs = new ArrayCollection();

    }
    public function getIdToirnoi()
    {
        return $this->idToirnoi;
    }
    public function setIdToirnoi($idToirnoi)
    {
        $this->idToirnoi = $idToirnoi;
    }

    public function getNomTournoi()
    {
        return $this->nomTournoi;
    }
    public function setNomTournoi($nomTournoi)
    {
        $this->nomTournoi = $nomTournoi;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    public function getOrganisateur()
    {
        return $this->organisateur;
    }
    public function setOrganisateur($organisateur)
    {
        $this->organisateur = $organisateur;
    }

    public function getCombats()
    {
        return $this->combats;
    }
    public function setCombats($combats)
    {
        $this->combats = $combats;
    }

    public function getLutteurs()
    {
        return $this->lutteurs;
    }
    public function setLutteurs($lutteurs)
    {
        $this->lutteurs = $lutteurs;
    }
}

?>