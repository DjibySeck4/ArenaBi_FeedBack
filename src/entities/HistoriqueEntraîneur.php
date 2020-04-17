<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="historiqueEntraineur")
 **/
class HistiriqueEntraineur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idHistoriqueEntraineur;
    
    /** @Column(type="string", length=10, nullable=false) **/
    private $dateAdhesion;

    /**
     * @ManyToOne(targetEntity="Entraineur", inversedBy="historiqueEntraineur")
    * @JoinColumn(name="idEntraineur", referencedColumnName="idPersonne")
    */
     private $idEntraineur;

     /** (type="integer")**/
     private $idEcurie;
     
     /** @column(type="string") */
     private $description;
    
    
    public function __construct()
    {
        
    }

    public function getIdHistoriqueEntraineur()
    {
        return $this->idHistoriqueEntraineur;
    }
    public function setIdHistoriqueEntraineur($idHistoriqueEntraineur)
    {
        $this->idHistoriqueEntraineur = $idHistoriqueEntraineur;
    }
    
    public function getIdHistoriqueEcurie()
    {
        return $this->idHistoriqueEcurie;
    }
    public function setIdHistoriqueEcurie($idHistoriqueEcurie)
    {
        $this->idHistoriqueEcurie = $idHistoriqueEcurie;
    }

    public function getDateAdhesion()
    {
        return $this->dateAdhesion;
    }
    public function setDateAdhesion($dateAdhesion)
    {
        $this->dateAdhesion = $dateAdhesion;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getIdEcurie()
    {
        return $this->idEcurie;
    }
    public function setIdEcurie($idEcurie)
    {
        $this->idEcurie = $idEcurie;
    }

    public function getIdLutteur()
    {
        return $this->idLutteur;
    }
    public function setIdLutteur($idLutteur)
    {
        $this->idLutteur = $idLutteur;
    }

    public function getIdEntraineur()
    {
        return $this->idEntraineur;
    }
    public function setIdEntraineur($idEntraineur)
    {
        $this->idEntraineur = $idEntraineur;
    }
}

?>