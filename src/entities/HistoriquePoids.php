<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="historiquePoids")
 **/
class HistiriquePoids
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idHistoriquePoids;

    /** @column(type="string", length=10, nullable=false) */
    private $datePoids;

    /** @column(type="string") */
    private $description;

    /** @column(type="integer", nullable=false) */
    private $poids;

     /**
     * @ManyToOne(targetEntity="Lutteur", inversedBy="historiquePoids")
     * @JoinColumn(name="lutteur_id", referencedColumnName="idPersonne")
     */
    private $idLutteur;
    
    public function __construct()
    {
        
    }
   
    public function getIdHistoriquePoids()
    {
        return $this->idHistoriquePoids;
    }
    public function setIdHistoriquePoids($idHistoriquePoids)
    {
        $this->idHistoriquePoids = $idHistoriquePoids;

        return $this;
    }

    public function getDatePoids()
    {
        return $this->datePoids;
    }
    public function setDatePoids($datePoids)
    {
        $this->datePoids = $datePoids;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getIdLutteur()
    {
        return $this->idLutteur;
    }
    public function setIdLutteur($idLutteur)
    {
        $this->idLutteur = $idLutteur;
    }
}

?>