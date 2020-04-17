<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="historiqueManager")
 **/
class HistiriqueManager
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idHistoriqueManager;
    
    /** @Column(type="string", length=10, nullable=false) **/
    private $dateAdhesion;

    /** @Column(type="text") **/
    private $description;
 
      /**
      * @ManyToOne(targetEntity="Manager", inversedBy="historiqueManager")
      * @JoinColumn(name="manager_id", referencedColumnName="idPersonne")
      */
     private $idManager;




    public function __construct()
    {
        
    }
    public function getIdHistoriqueManager()
    {
        return $this->idHistoriqueManager;
    }
    public function setIdHistoriqueManager($idHistoriqueManager)
    {
        $this->idHistoriqueManager = $idHistoriqueManager;
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

    public function getIdManager()
    {
        return $this->idManager;
    }
    public function setIdManager($idManager)
    {
        $this->idManager = $idManager;
    }
}

?>