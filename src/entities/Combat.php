<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="combat")
 **/
class Combat
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idCombat;
  
    /** @Column(type="integer") **/
    private $idLieuDuCombat;
 
    /** @Column(type="string", length=10, nullable=false) **/
    private $dateCombat;

    /** @Column(type="string", length=12, nullable=true) **/
    private $dureeCombat;

     /** @Column(type="boolean", nullable=false) **/
    private $isGrandCombat;

    /** @Column(type="integer") **/
    private $numeroCombatJournee;

    /** @Column(type="text") **/
    private $description;

    /** @Column(type="integer") **/
    private $idVideoCombat;

    /** @Column(type="integer") **/
    private $idPhotoCombat;

    /** @Column(type="integer") **/
    private $nombreSpectateur;

    /** @Column(type="integer") **/
    private $idTournoi;

   /**
    * @OneToOne(targetEntity="ResultatCombat")
    * @JoinColumn(name="resultatCombat_id", referencedColumnName="idResultat")
    */
    private $idResultat;

    /**
    * @OneToOne(targetEntity="BandeAnnonceCombat")
    * @JoinColumn(name="bandeAnnonceCombat_id", referencedColumnName="idBandeAnnonce")
    */
    private $idBandeAnnonce;

    
    /**
     * Many combat have one journeeLutte. This is the owning side.
     * @ManyToOne(targetEntity="JourneeLutte", inversedBy="combats")
     * @JoinColumn(name="journneLutte_id", referencedColumnName="idJourneeLutte")
     */
    private $journneeLutte;

     /**
     * Many combat have one stadeArene. This is the owning side.
     * @ManyToOne(targetEntity="StadeArene", inversedBy="combats")
     * @JoinColumn(name="stadeArene_id", referencedColumnName="idLieuStade")
     */
    private $stadeArene;

    /**
     * Many combat have one tournoiLutte. This is the owning side.
     * @ManyToOne(targetEntity="TournoiLutte", inversedBy="combats")
     * @JoinColumn(name="tournoiLutte_id", referencedColumnName="idToirnoi")
     */
    private $tournoiLutte;

     /**
     * @ManyToMany(targetEntity="Lutteur")
     * @JoinTable(name="participer",
     *      joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     *      inverseJoinColumns={@JoinColumn(name="idLutteur", referencedColumnName="idPersonne")}
     *      )
     */
    private $lutteurs;

    /**
     * @ManyToOne(targetEntity="StadeArene", inversedBy="combat")
     * @JoinColumn(name="stadeArene_id", referencedColumnName="idLieuStade")
     */
    private $idLieuStade;

    /**
     * @ManyToOne(targetEntity="Promoteur", inversedBy="combat")
     * @JoinColumn(name="promoteur_id", referencedColumnName="idPersonne")
     */
    private $idPromoteur;

     /**
     * @ManyToMany(targetEntity="Arbitre")
     * @JoinTable(name="arbitrer",
     *      joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     *      inverseJoinColumns={@JoinColumn(name="idArbitre", referencedColumnName="idPersonne")}
     *      )
     */
    private $arbitres;

      /**
     * @ManyToOne(targetEntity="Consultant", inversedBy="combat")
     * @JoinColumn(name="idConsultant", referencedColumnName="idPersonne")
     */
    private $idConsultant;

     /**
     * @ManyToOne(targetEntity="JourneeLutte", inversedBy="combat")
     * @JoinColumn(name="journeeLutte_id", referencedColumnName="idJourneeLutte")
     */
    private $idJourneeCombat;
    
    public function __construct()
    {
        $this->idResultat = new ArrayCollection();
        $this->idBandeAnnonce = new ArrayCollection();
    }
   
    public function getIdCombat()
    {
        return $this->idCombat;
    }
    public function setIdCombat($idCombat)
    {
        $this->idCombat = $idCombat;
    }

    public function getIdLutteur1()
    {
        return $this->idLutteur1;
    }
    public function setIdLutteur1($idLutteur1)
    {
        $this->idLutteur1 = $idLutteur1;
    }

    public function getIdLutteur2()
    {
        return $this->idLutteur2;
    }
    public function setIdLutteur2($idLutteur2)
    {
        $this->idLutteur2 = $idLutteur2;
    }
 
    public function getIdVainqueur()
    {
        return $this->idVainqueur;
    }
    public function setIdVainqueur($idVainqueur)
    {
        $this->idVainqueur = $idVainqueur;
    }

    public function getIdLieuDuCombat()
    {
        return $this->idLieuDuCombat;
    }
    public function setIdLieuDuCombat($idLieuDuCombat)
    {
        $this->idLieuDuCombat = $idLieuDuCombat;
    }

    public function getIdPromoteur()
    {
        return $this->idPromoteur;
    }
    public function setIdPromoteur($idPromoteur)
    {
        $this->idPromoteur = $idPromoteur;
    }

    public function getDateCombat()
    {
        return $this->dateCombat;
    }
    public function setDateCombat($dateCombat)
    {
        $this->dateCombat = $dateCombat;
    }

    public function getDureeCombat()
    {
        return $this->dureeCombat;
    }
    public function setDureeCombat($dureeCombat)
    {
        $this->dureeCombat = $dureeCombat;
    }

    public function isGrandCombat()
    {
        return $this->isGrandCombat;
    }
    public function setIsGrandCombat($isGrandCombat)
    {
        $this->isGrandCombat = $isGrandCombat;
    }

    public function getNumeroCombatJournee()
    {
        return $this->numeroCombatJournee;
    }
    public function setNumeroCombatJournee($numeroCombatJournee)
    {
        $this->numeroCombatJournee = $numeroCombatJournee;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getIdVideoCombat()
    {
        return $this->idVideoCombat;
    }
    public function setIdVideoCombat($idVideoCombat)
    {
        $this->idVideoCombat = $idVideoCombat;
    }

    public function getIdPhotoCombat()
    {
        return $this->idPhotoCombat;
    }
    public function setIdPhotoCombat($idPhotoCombat)
    {
        $this->idPhotoCombat = $idPhotoCombat;
    }

    public function getIdArbitre1()
    {
        return $this->idArbitre1;
    }
    public function setIdArbitre1($idArbitre1)
    {
        $this->idArbitre1 = $idArbitre1;
    }

    public function getIdArbitre2()
    {
        return $this->idArbitre2;
    }
    public function setIdArbitre2($idArbitre2)
    {
        $this->idArbitre2 = $idArbitre2;
    }

    public function getIdArbitre3()
    {
        return $this->idArbitre3;
    }
    public function setIdArbitre3($idArbitre3)
    {
        $this->idArbitre3 = $idArbitre3;
    }

    public function getIdConsultant()
    {
        return $this->idConsultant;
    }
    public function setIdConsultant($idConsultant)
    {
        $this->idConsultant = $idConsultant;
    }

    public function getNombreSpectateur()
    {
        return $this->nombreSpectateur;
    }
    public function setNombreSpectateur($nombreSpectateur)
    {
        $this->nombreSpectateur = $nombreSpectateur;
    }

    public function getIdTournoi()
    {
        return $this->idTournoi;
    }
    public function setIdTournoi($idTournoi)
    {
        $this->idTournoi = $idTournoi;
    }

    public function getIdResultatCombat()
    {
        return $this->idResultatCombat;
    }
    public function setIdResultatCombat($idResultatCombat)
    {
        $this->idResultatCombat = $idResultatCombat;
    }

    public function getIdResultat()
    {
        return $this->idResultat;
    }
    public function setIdResultat($idResultat)
    {
        $this->idResultat = $idResultat;
    }

    public function getIdBandeAnnonce()
    {
        return $this->idBandeAnnonce;
    }
    public function setIdBandeAnnonce($idBandeAnnonce)
    {
        $this->idBandeAnnonce = $idBandeAnnonce;
    }

    public function getJournneeLutte()
    {
        return $this->journneeLutte;
    }
    public function setJournneeLutte($journneeLutte)
    {
        $this->journneeLutte = $journneeLutte;
    }

    public function getStadeArene()
    {
        return $this->stadeArene;
    }
    public function setStadeArene($stadeArene)
    {
        $this->stadeArene = $stadeArene;
    }

    public function getTournoiLutte()
    {
        return $this->tournoiLutte;
    }
    public function setTournoiLutte($tournoiLutte)
    {
        $this->tournoiLutte = $tournoiLutte;
    }

    public function getPersonnes()
    {
        return $this->personnes;
    }
    public function setPersonnes($personnes)
    {
        $this->personnes = $personnes;
    }

    public function getIdLieuStade()
    {
        return $this->idLieuStade;
    }
    public function setIdLieuStade($idLieuStade)
    {
        $this->idLieuStade = $idLieuStade;
    }

    /**
     * Get joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     */ 
    public function getArbitres()
    {
        return $this->arbitres;
    }

    /**
     * Set joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     *
     * @return  self
     */ 
    public function setArbitres($arbitres)
    {
        $this->arbitres = $arbitres;

        return $this;
    }

     /**
     * Get joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     */ 
    public function getLutteurs()
    {
        return $this->lutteurs;
    }
    
    /**
     * Set joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     *
     * @return  self
     */ 
    public function setLutteurs($lutteurs)
    {
        $this->lutteurs = $lutteurs;

        return $this;
    }

    public function getIdJourneeCombat()
    {
        return $this->idJourneeCombat;
    }
    public function setIdJourneeCombat($idJourneeCombat)
    {
        $this->idJourneeCombat = $idJourneeCombat;
    }
}

?>