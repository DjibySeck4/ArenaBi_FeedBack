<?php


/**
 * @Entity @Table(name="historiqueEcurie")
 **/

class HistoriqueEcurie
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idHistoriqueEcurie;
    /**
     * @ManyToOne(targetEntity="Lutteur", inversedBy="historiqueEcurie")
     * @JoinColumn(name="idLutteur", referencedColumnName="idLutteur")
     */
    private $lutteur;
    /**
     * @ManyToOne(targetEntity="Ecurie", inversedBy="historiqueEcurie")
     * @JoinColumn(name="idEcurie", referencedColumnName="idEcurie")
     */
    private $ecurie;

    /** @column(type="string", length=10, nullable=false) */
    private $dateAdhesion;
    /** @column(type="string") */
    private $description;

    /**
     * Get the value of idHistoriqueEcurie
     */ 
    public function getIdHistoriqueEcurie()
    {
        return $this->idHistoriqueEcurie;
    }

    /**
     * Set the value of idHistoriqueEcurie
     */ 
    public function setIdHistoriqueEcurie($idHistoriqueEcurie)
    {
        $this->idHistoriqueEcurie = $idHistoriqueEcurie;
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
     * Get the value of lutteur
     */ 
    public function getLutteur()
    {
        return $this->lutteur;
    }

    /**
     * Set the value of lutteur
     */ 
    public function setLutteur($lutteur)
    {
        $this->lutteur = $lutteur;
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