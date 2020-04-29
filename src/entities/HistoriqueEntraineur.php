<?php


/**
 * @Entity @Table(name="historiqueEntraineur")
 **/

class HistoriqueEntraineur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idHistoriqueEntraineur;
    /**
     * @ManyToOne(targetEntity="Entraineur", inversedBy="historiqueEntraineur")
     * @JoinColumn(name="idEntraineur", referencedColumnName="idEntraineur")
     */
    private $entraineur;
    /**
     * @ManyToOne(targetEntity="Ecurie", inversedBy="historiqueEntraineur")
     * @JoinColumn(name="idEcurie", referencedColumnName="idEcurie")
     */
    private $ecurie;
    /** @column(type="string", length=10, nullable=false) */
    private $dateAdhesion;
    /** @column(type="string") */
    private $description;

    

    /**
     * Get the value of idHistoriqueEntraineur
     */ 
    public function getIdHistoriqueEntraineur()
    {
        return $this->idHistoriqueEntraineur;
    }

    /**
     * Set the value of idHistoriqueEntraineur
     */ 
    public function setIdHistoriqueEntraineur($idHistoriqueEntraineur)
    {
        $this->idHistoriqueEntraineur = $idHistoriqueEntraineur;
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

    /**
     * Get the value of entraineur
     */ 
    public function getEntraineur()
    {
        return $this->entraineur;
    }

    /**
     * Set the value of entraineur
     */ 
    public function setEntraineur($entraineur)
    {
        $this->entraineur = $entraineur;
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

    /**
     * Get the value of dateAdhesion
     */ 
    public function getDateAdhesion()
    {
        return $this->dateAdhesion;
    }

    /**
     * Set the value of dateAdhesion
     */ 
    public function setDateAdhesion($dateAdhesion)
    {
        $this->dateAdhesion = $dateAdhesion;
    }
}