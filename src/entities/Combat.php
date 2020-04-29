<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="combat")
 **/

class Combat
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idCombat;
    /**
     * @ManyToMany(targetEntity="Lutteur",cascade={"persist"})
     * @JoinTable(name="participer",
     *      joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     *      inverseJoinColumns={@JoinColumn(name="idLutteur", referencedColumnName="idLutteur")}
     *      )
     */
    private $lutteurs;
    /**
     * @ManyToOne(targetEntity="StadeLieuCombat", inversedBy="combat",cascade={"persist"})
     * @JoinColumn(name="idLieuStade", referencedColumnName="idLieuStade")
     */
    private $lieuStade;
    /**
     * @ManyToOne(targetEntity="Promoteur", inversedBy="combat",cascade={"persist"})
     * @JoinColumn(name="idPromoteur", referencedColumnName="idPromoteur")
     */
    private $promoteur; 
    /**
     * @ManyToMany(targetEntity="Arbitre",cascade={"persist"})
     * @JoinTable(name="arbitrer",
     *      joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     *      inverseJoinColumns={@JoinColumn(name="idArbitre", referencedColumnName="idArbitre")}
     *      )
     */
    private $arbitres;
    /**
     * @ManyToMany(targetEntity="Consultant",cascade={"persist"})
     * @JoinTable(name="consulter",
     *      joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     *      inverseJoinColumns={@JoinColumn(name="idConsultant", referencedColumnName="idConsultant")}
     *      )
     */

    private $consultant;
    /**
     * @ManyToOne(targetEntity="JourneeLutte", inversedBy="combat",cascade={"persist"})
     * @JoinColumn(name="idJourneeLutte", referencedColumnName="idJourneeLutte")
     */
    private $journeeCombat;
    /**
     * @ManyToOne(targetEntity="TournoiLutte", inversedBy="combat",cascade={"persist"})
     * @JoinColumn(name="idTournoiLutte", referencedColumnName="idTournoiLutte")
     */
    private $tournoiLutte;
    /** @column(type="string" , length=10, nullable=false) */
    private $dateCombat;
    /** @column(type="boolean") */ 
    private $isGrandCombat;
    /** @column(type="string", nullable=false) */
    private $description;
    /** @column(type="integer") */
    private $nombreSpectateurs;
    
    private $bandeAnnonce;

    public function __construct()
    {
        $this->lutteurs = new ArrayCollection();
        $this->arbitres = new ArrayCollection();
        $this->consultant = new ArrayCollection();
    }

    /**
     * Get the value of idCombat
     */ 
    public function getIdCombat()
    {
        return $this->idCombat;
    }

    /**
     * Set the value of idCombat
     */ 
    public function setIdCombat($idCombat)
    {
        $this->idCombat = $idCombat;
    }

    /**
     * Get joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     */ 
    public function getLutteurs()
    {
        return $this->lutteurs;
    }

    /**
     * Get the value of dateCombat
     */ 
    public function getDateCombat()
    {
        return $this->dateCombat;
    }

    /**
     * Set the value of dateCombat
     */ 
    public function setDateCombat($dateCombat)
    {
        $this->dateCombat = $dateCombat;
    }

    /**
     * Get the value of isGrandCombat
     */ 
    public function getIsGrandCombat()
    {
        return $this->isGrandCombat;
    }

    /**
     * Set the value of isGrandCombat
     */ 
    public function setIsGrandCombat($isGrandCombat)
    {
        $this->isGrandCombat = $isGrandCombat;
    }

    /**
     * Get the value of Description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     */ 
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get the value of nombreSpectateurs
     */ 
    public function getNombreSpectateurs()
    {
        return $this->nombreSpectateurs;
    }

    /**
     * Set the value of nombreSpectateurs
     */ 
    public function setNombreSpectateurs($nombreSpectateurs)
    {
        $this->nombreSpectateurs = $nombreSpectateurs;
    }

    /**
     * Get the value of bandeAnnonce
     */ 
    public function getBandeAnnonce()
    {
        return $this->bandeAnnonce;
    }

    /**
     * Set the value of bandeAnnonce
     */ 
    public function setBandeAnnonce($bandeAnnonce)
    {
        $this->bandeAnnonce = $bandeAnnonce;
    }

    /**
     * Get the value of lieuStade
     */ 
    public function getLieuStade()
    {
        return $this->lieuStade;
    }

    /**
     * Set the value of lieuStade
     */ 
    public function setLieuStade($lieuStade)
    {
        $this->lieuStade = $lieuStade;
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

    /**
     * Get joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     */ 
    public function getArbitres()
    {
        return $this->arbitres;
    }
    
    /**
     * Get the value of journeeCombat
     */ 
    public function getJourneeCombat()
    {
        return $this->journeeCombat;
    }

    /**
     * Set the value of journeeCombat
     */ 
    public function setJourneeCombat($journeeCombat)
    {
        $this->journeeCombat = $journeeCombat;
    }

    /**
     * Get the value of tournoiLutte
     */ 
    public function getTournoiLutte()
    {
        return $this->tournoiLutte;
    }

    /**
     * Set the value of tournoiLutte
     */ 
    public function setTournoiLutte($tournoiLutte)
    {
        $this->tournoiLutte = $tournoiLutte;
    }

    /**
     * Get joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")},
     */ 
    public function getConsultant()
    {
        return $this->consultant;
    } 

    public function addConsultant(Consultant $consultant){
        if($this->consultant->contains($consultant)){
            return ;
        }
        $consultant->addCombat($this);
        $this->consultant[] = $consultant;
    }

    public function addArbitre(Arbitre $arbitre)
    {
        if ($this->arbitres->contains($arbitre)) {
            return;
        }
        $arbitre->addCombat($this);
        $this->arbitres[] = $arbitre;
    }

    public function addLutteur(Lutteur $lutteur)
    {
        if ($this->lutteurs->contains($lutteur)) {
            return;
        }
        $lutteur->addCombat($this);
        $this->lutteurs[] = $lutteur;
    }

    /**
     * Set joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")}
     */ 
    public function setArbitres($arbitres)
    {
        $this->arbitres = $arbitres;
    }

    /**
     * Set joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")}
     */ 
    public function setConsultant($consultant)
    {
        $this->consultant = $consultant;
    }

    /**
     * Set joinColumns={@JoinColumn(name="idCombat", referencedColumnName="idCombat")}
     */ 
    public function setLutteurs($lutteurs)
    {
        $this->lutteurs = $lutteurs;
    }
}
?>