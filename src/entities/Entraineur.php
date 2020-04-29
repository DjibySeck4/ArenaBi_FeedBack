<?php

/** @Entity @Table(name="entraineur") */

class Entraineur
{

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idEntraineur;

    /**
     * @OneToOne(targetEntity="Personne",cascade={"persist"})
     * @JoinColumn(name="idPersonne", referencedColumnName="idPersonne")
     */
    private $personne;

    /** @column(type="string", length=100, nullable=false) */
    private $descriptionEntraineur;

     /**
     * @ManyToMany(targetEntity="Ecurie", mappedBy="entraineur")
     **/
    private $ecurie;

    /**
     * Get the value of idEntraineur
     */ 
    public function getIdEntraineur()
    {
        return $this->idEntraineur;
    }

    /**
     * Set the value of idEntraineur
     */ 
    public function setIdEntraineur($idEntraineur)
    {
        $this->idEntraineur = $idEntraineur;
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
     * Get the value of descriptionEntraineur
     */ 
    public function getDescriptionEntraineur()
    {
        return $this->descriptionEntraineur;
    }

    /**
     * Set the value of descriptionEntraineur
     */ 
    public function setDescriptionEntraineur($descriptionEntraineur)
    {
        $this->descriptionEntraineur = $descriptionEntraineur;
    }

    /**
     * Get the value of ecurie
     */ 
    public function getEcurie()
    {
        return $this->ecurie;
    }

    /**
     * Set the value of ecurie
     */ 
    public function setEcurie($ecurie)
    {
        $this->ecurie = $ecurie;
    }
}
