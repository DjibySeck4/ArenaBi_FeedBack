<?php

use Doctrine\Common\Collections\ArrayCollection;

/** @Entity @Table(name="manager") */

class Manager
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idManager;

    /**
     * @OneToOne(targetEntity="Personne",cascade={"persist"})
     * @JoinColumn(name="idPersonne", referencedColumnName="idPersonne")
     */
    private $personne;
    /**
     * @OneToMany(targetEntity="Lutteur", mappedBy="manager")
     **/
    private $lutteurs;
    /** @column(type="string", length=100, nullable=false) */
    private $descriptionManager;

    public function __construct()
    {
        $this->lutteurs = new ArrayCollection();
    }
    

    /**
     * Get the value of idManager
     */ 
    public function getIdManager()
    {
        return $this->idManager;
    }

    /**
     * Set the value of idManager
     */ 
    public function setIdManager($idManager)
    {
        $this->idManager = $idManager;
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

    /**
     * Get the value of descriptionManager
     */ 
    public function getDescriptionManager()
    {
        return $this->descriptionManager;
    }

    /**
     * Set the value of descriptionManager
     */ 
    public function setDescriptionManager($descriptionManager)
    {
        $this->descriptionManager = $descriptionManager;
    }
}