<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="ecurie")
 **/
class Ecurie
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idEcurie;
    
    /** @Column(type="string") **/
    private $nomEcurie;

    /** @Column(type="string") **/
    private $dateCreation;

    /** @Column(type="string") **/
    private $descriptionEntraineur;

     /**
     * @ManyToMany(targetEntity="Entraineur",cascade={"persist"})
     * @JoinTable(name="entrainer1",
     *      joinColumns={@JoinColumn(name="idEcurie", referencedColumnName="idEcurie")},
     *      inverseJoinColumns={@JoinColumn(name="idEntraineur", referencedColumnName="idEntraineur")}
     *      )
     */
    private $idEntraineur; 

    /**
     * @OneToMany(targetEntity="Manager", mappedBy="ecurie")
     **/
    private $managers;

    public function __construct()
    {
         $this->managers = new ArrayCollection();
    }
  
    public function getIdEcurie()
    {
        return $this->idEcurie;
    }
    public function setIdEcurie($idEcurie)
    {
        $this->idEcurie = $idEcurie;
    }

    public function getNomEcurie()
    {
        return $this->nomEcurie;
    }
    public function setNomEcurie($nomEcurie)
    {
        $this->nomEcurie = $nomEcurie;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    public function getDescriptionEntraineur()
    {
        return $this->descriptionEntraineur;
    }
    public function setDescriptionEntraineur($descriptionEntraineur)
    {
        $this->descriptionEntraineur = $descriptionEntraineur;
    }
  
    public function getIdManager()
    {
        return $this->idManager;
    }
    public function setIdManager($idManager)
    {
        $this->idManager = $idManager;
    }

    public function getIdEntraineur()
    {
        return $this->idEntraineur;
    }
    public function setIdEntraineur($idEntraineur)
    {
        $this->idEntraineur = $idEntraineur;
    }

    public function getManagers()
    {
        return $this->managers;
    }
    public function setManagers($managers)
    {
        $this->managers = $managers;
    }

   
}

?>