<?php

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity @Table(name="lutteur") */

class Lutteur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idLutteur;

    /**
     * @OneToOne(targetEntity="Personne",cascade={"persist"})
     * @JoinColumn(name="idPersonne", referencedColumnName="idPersonne")
     */
    private $personne;

    /** @column(type="string", length=20, nullable=false)  */
    private $droitierOuGauchier;

    /** @column(type="string", length=20, nullable=false) */
    private $categorieVipAutres;

    /**.
     * @ManyToMany(targetEntity="Combat", mappedBy="lutteur")
     */
    private $combats;
    
    /**
     * @ManyToOne(targetEntity="Manager", inversedBy="lutteur")
     * @JoinColumn(name="idManager", referencedColumnName="idManager")
     */
    private $manager;
    /**
     * @OneToMany(targetEntity="TournoiParticipant", mappedBy="lutteur")
     **/
    private $tournois;

    public function __construct()
    {
        $this->combats = new ArrayCollection();
        $this->tournois = new ArrayCollection();
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
     * Get the value of droitierOuGauchier
     */ 
    public function getDroitierOuGauchier()
    {
        return $this->droitierOuGauchier;
    }

    /**
     * Set the value of droitierOuGauchier
     */ 
    public function setDroitierOuGauchier($droitierOuGauchier)
    {
        $this->droitierOuGauchier = $droitierOuGauchier;
    }

    /**
     * Get the value of categorieVipAutres
     */ 
    public function getCategorieVipAutres()
    {
        return $this->categorieVipAutres;
    }

    /**
     * Set the value of categorieVipAutres
     */ 
    public function setCategorieVipAutres($categorieVipAutres)
    {
        $this->categorieVipAutres = $categorieVipAutres;
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
        $this->combats[] = $combat;
    }

    /**
     * Get the value of tournois
     */ 
    public function getTournois()
    {
        return $this->tournois;
    }

    /**
     * Get the value of manager
     */ 
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set the value of manager
     */ 
    public function setManager($manager)
    {
        // var_dump($manager); die;
        $this->manager = $manager;
    }

    /**
     * Set the value of combats
     */ 
    public function setCombats($combats)
    {
        $this->combats = $combats;
    }
    
}