<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="breve")
 **/
class Breve
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idBreve;
    /** @Column(type="string", length=40, nullable=false) **/
    private $titreBreve;
    /** @Column(type="text", nullable=false) **/
    private $contenuBreve;
    /** @Column(type="string", length=10, nullable=false) **/
    private $dateBreve;
    /** @Column(type="string", length=30, nullable=false) **/
    private $tagBreve;
    /** @Column(type="string", length=20, nullable=false) **/
    private $imageBreve;
    /** @Column(type="boolean", nullable=false) **/
    private $isVisible;


    

    /**
     * Get the value of idBreve
     */ 
    public function getIdBreve()
    {
        return $this->idBreve;
    }

    /**
     * Set the value of idBreve
     */ 
    public function setIdBreve($idBreve)
    {
        $this->idBreve = $idBreve;
    }

    /**
     * Get the value of dateBreve
     */ 
    public function getDateBreve()
    {
        return $this->dateBreve;
    }

    /**
     * Set the value of dateBreve
     */ 
    public function setDateBreve($dateBreve)
    {
        $this->dateBreve = $dateBreve;
    }

    /**
     * Get the value of titreBreve
     */ 
    public function getTitreBreve()
    {
        return $this->titreBreve;
    }

    /**
     * Set the value of titreBreve
     */ 
    public function setTitreBreve($titreBreve)
    {
        $this->titreBreve = $titreBreve;
    }

    /**
     * Get the value of contenuBreve
     */ 
    public function getContenuBreve()
    {
        return $this->contenuBreve;
    }

    /**
     * Set the value of contenuBreve
     */ 
    public function setContenuBreve($contenuBreve)
    {
        $this->contenuBreve = $contenuBreve;
    }

    /**
     * Get the value of idRubrique
     */ 
    public function getIdRubrique()
    {
        return $this->idRubrique;
    }

    /**
     * Set the value of idRubrique
     */ 
    public function setIdRubrique($idRubrique)
    {
        $this->idRubrique = $idRubrique;
    }

    /**
     * Get the value of auteurBreve
     */ 
    public function getAuteurBreve()
    {
        return $this->auteurBreve;
    }

    /**
     * Set the value of auteurBreve
     */ 
    public function setAuteurBreve($auteurBreve)
    {
        $this->auteurBreve = $auteurBreve;
    }

    /**
     * Get the value of tagBreve
     */ 
    public function getTagBreve()
    {
        return $this->tagBreve;
    }

    /**
     * Set the value of tagBreve
     */ 
    public function setTagBreve($tagBreve)
    {
        $this->tagBreve = $tagBreve;
    }

    /**
     * Get the value of imageBreve
     */ 
    public function getImageBreve()
    {
        return $this->imageBreve;
    }

    /**
     * Set the value of imageBreve
     */ 
    public function setImageBreve($imageBreve)
    {
        $this->imageBreve = $imageBreve;
    }

    /**
     * Get the value of isVisible
     */ 
    public function getIsVisible()
    {
        return $this->isVisible;
    }

    /**
     * Set the value of isVisible
     */ 
    public function setIsVisible($isVisible)
    {
        $this->isVisible = $isVisible;
    }
}