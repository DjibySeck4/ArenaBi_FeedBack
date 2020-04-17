<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="typeDeChute")
 **/
class TypeDeChute
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idTypeDeChute;
    
    /** @Column(type="string", length=50, nullable=true) **/
    private $designationChute;

    /** @Column(type="string", length=100, nullable=true) **/
    private $particulariteChute;

     /** @Column(type="string") **/
    private $exempleVideoPhoto;
    
    /**
     * @OneToMany(targetEntity="ResultatCombat", mappedBy="typeDeChute")
     **/
    private $combats;
    
    public function __construct()
    {
    
    }
    public function getIdTypeDeChute()
    {
        return $this->idTypeDeChute;
    }
    public function setIdTypeDeChute($idTypeDeChute)
    {
        $this->idTypeDeChute = $idTypeDeChute;
    }

    public function getDesignationChute()
    {
        return $this->designationChute;
    }
    public function setDesignationChute($designationChute)
    {
        $this->designationChute = $designationChute;
    }

    public function getParticulariteChute()
    {
        return $this->particulariteChute;
    }
    public function setParticulariteChute($particulariteChute)
    {
        $this->particulariteChute = $particulariteChute;
    }

    public function getExempleVideoPhoto()
    {
        return $this->exempleVideoPhoto;
    }
    public function setExempleVideoPhoto($exempleVideoPhoto)
    {
        $this->exempleVideoPhoto = $exempleVideoPhoto;
    }

    public function getCombats()
    {
        return $this->combats;
    }
    public function setCombats($combats)
    {
        $this->combats = $combats;
    }
}

?>