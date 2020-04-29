<?php


/**
 * @Entity @Table(name="historiquePoids")
 **/

class HistoriquePoids
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idHistoriquePoids;
    /**
     * @ManyToOne(targetEntity="Lutteur", inversedBy="historiquePoids")
     * @JoinColumn(name="idLutteur", referencedColumnName="idLutteur")
     */
    private $lutteur;

    /** @column(type="string", length=10, nullable=false) */
    private $datePoids;
    /** @column(type="string") */
    private $description;
    /** @column(type="integer", nullable=false) */
    private $poids;

    /**
     * Get the value of idHistoriquePoids
     */ 
    public function getIdHistoriquePoids()
    {
        return $this->idHistoriquePoids;
    }

    /**
     * Set the value of idHistoriquePoids
     */ 
    public function setIdHistoriquePoids($idHistoriquePoids)
    {
        $this->idHistoriquePoids = $idHistoriquePoids;
    }

    /**
     * Get the value of datePoids
     */ 
    public function getDatePoids()
    {
        return $this->datePoids;
    }

    /**
     * Set the value of datePoids
     */ 
    public function setDatePoids($datePoids)
    {
        $this->datePoids = $datePoids;
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
     * Get the value of poids
     */ 
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     */ 
    public function setPoids($poids)
    {
        $this->poids = $poids;
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
}
?>