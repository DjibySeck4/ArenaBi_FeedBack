<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="historiqueEcurie")
 **/
class HistiriqueEcurie
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idHistoriqueEcurie;

     /** @column(type="string", length=10, nullable=false) */
     private $dateAdhesion;

     /** @column(type="string") */
     private $description;

    /**
     * @ManyToOne(targetEntity="Lutteur", inversedBy="historiqueEcurie")
     * @JoinColumn(name="lutteur_id", referencedColumnName="idPersonne")
     */
    private $idLutteur;

    /**
     * @ManyToOne(targetEntity="Ecurie", inversedBy="historiqueEcurie")
     * @JoinColumn(name="ecurie_id", referencedColumnName="idEcurie")
     */
    private $idEcurie;

   
    
    
    public function __construct()
    {
        
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
}

?>