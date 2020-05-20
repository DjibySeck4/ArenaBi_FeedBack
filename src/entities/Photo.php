<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="photo") 
 **/
class Photo
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idPhoto;
    /**
     * @ManyToOne(targetEntity="ResultatCombat", inversedBy="photo")
     * @JoinColumn(name="idResultat", referencedColumnName="idResultat") 
     */
    private $idResultat;
    /** @Column(type="string", length=30, nullable=false) **/
    private $dossierPhoto;
    /** @Column(type="string", length=10, nullable=false) **/
    private $datePhoto;
    /** @Column(type="string", length=40, nullable=false) **/
    private $lieuPhoto;
    /** @Column(type="string", length=20, nullable=false) **/
    private $typePhoto;
    /** @Column(type="string", length=20, nullable=false) **/
    private $tag;
    /**  @Column(type="string") **/
    private $description;


    public function __construct()
    {
        $this->combats = new ArrayCollection();
    }

    /**
     * Get the value of idPhoto
     */ 
    public function getIdPhoto()
    {
        return $this->idPhoto;
    }

    /**
     * Set the value of idPhoto
     */ 
    public function setIdPhoto($idPhoto)
    {
        $this->idPhoto = $idPhoto;
    }

    /**
     * Get the value of idResultat
     */ 
    public function getIdResultat()
    {
        return $this->idResultat;
    }

    /**
     * Set the value of idResultat
     */ 
    public function setIdResultat($idResultat)
    {
        $this->idResultat = $idResultat;
    }

    /**
     * Get the value of dossierPhoto
     */ 
    public function getDossierPhoto()
    {
        return $this->dossierPhoto;
    }

    /**
     * Set the value of dossierPhoto
     */ 
    public function setDossierPhoto($dossierPhoto)
    {
        $this->dossierPhoto = $dossierPhoto;
    }

    /**
     * Get the value of datePhoto
     */ 
    public function getDatePhoto()
    {
        return $this->datePhoto;
    }

    /**
     * Set the value of datePhoto
     */ 
    public function setDatePhoto($datePhoto)
    {
        $this->datePhoto = $datePhoto;
    }

    /**
     * Get the value of lieuPhoto
     */ 
    public function getLieuPhoto()
    {
        return $this->lieuPhoto;
    }

    /**
     * Set the value of lieuPhoto
     */ 
    public function setLieuPhoto($lieuPhoto)
    {
        $this->lieuPhoto = $lieuPhoto;
    }

    /**
     * Get the value of typePhoto
     */ 
    public function getTypePhoto()
    {
        return $this->typePhoto;
    }

    /**
     * Set the value of typePhoto
     */ 
    public function setTypePhoto($typePhoto)
    {
        $this->typePhoto = $typePhoto;
    }

    /**
     * Get the value of tag
     */ 
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set the value of tag
     */ 
    public function setTag($tag)
    {
        $this->tag = $tag;
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
}