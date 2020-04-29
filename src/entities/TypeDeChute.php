<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="typeDeChute")
 **/
class TypeDeChute
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idTypeDeChute;
    /**
     * @OneToMany(targetEntity="ResultatCombat", mappedBy="typeDeChute")
     **/
    private $combats;
    /** @Column(type="string", length=100, nullable=false) **/
    private $designationChute;
    /** @Column(type="string", length=50, nullable=false) **/
    private $particulariteChute;
    /**  @Column(type="string", length=50, nullable=false) **/
    private $exempleVideoPhoto;


    public function __construct()
    {
        $this->combats = new ArrayCollection();
    }

    /**
     * Get the value of idTypeDeChute
     */ 
    public function getIdTypeDeChute()
    {
        return $this->idTypeDeChute;
    }

    /**
     * Set the value of idTypeDeChute
     */ 
    public function setIdTypeDeChute($idTypeDeChute)
    {
        $this->idTypeDeChute = $idTypeDeChute;
    }

    /**
     * Get the value of combats
     */ 
    public function getCombats()
    {
        return $this->combats;
    }

    /**
     * Set the value of combats
     */ 
    public function setCombats($combats)
    {
        $this->combats = $combats;
    }

    /**
     * Get the value of designationChute
     */ 
    public function getDesignationChute()
    {
        return $this->designationChute;
    }

    /**
     * Set the value of designationChute
     */ 
    public function setDesignationChute($designationChute)
    {
        $this->designationChute = $designationChute;
    }

    /**
     * Get the value of particulariteChute
     */ 
    public function getParticulariteChute()
    {
        return $this->particulariteChute;
    }

    /**
     * Set the value of particulariteChute
     */ 
    public function setParticulariteChute($particulariteChute)
    {
        $this->particulariteChute = $particulariteChute;
    }

    /**
     * Get the value of exempleVideoPhoto
     */ 
    public function getExempleVideoPhoto()
    {
        return $this->exempleVideoPhoto;
    }

    /**
     * Set the value of exempleVideoPhoto
     */ 
    public function setExempleVideoPhoto($exempleVideoPhoto)
    {
        $this->exempleVideoPhoto = $exempleVideoPhoto;
    }
}
?>