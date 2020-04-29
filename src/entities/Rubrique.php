<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="rubrique")
 **/
class Rubrique
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idRubrique;
    /** @Column(type="string", length=40, nullable=false) **/
    private $intetuleRubrique;
    /** @Column(type="string") **/
    private $descriptionRubrique;
    /** @Column(type="string", length=10, nullable=false) **/
    private $dateCreation;
    /**
     * @OneToMany(targetEntity="Article", mappedBy="rubrique")
     */
    private $articles;


    public function __construct()
    {
        $this->articles = new ArrayCollection();
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
     * Get the value of intetuleRubrique
     */ 
    public function getIntetuleRubrique()
    {
        return $this->intetuleRubrique;
    }

    /**
     * Set the value of intetuleRubrique
     */ 
    public function setIntetuleRubrique($intetuleRubrique)
    {
        $this->intetuleRubrique = $intetuleRubrique;
    }

    /**
     * Get the value of descriptionRubrique
     */ 
    public function getDescriptionRubrique()
    {
        return $this->descriptionRubrique;
    }

    /**
     * Set the value of descriptionRubrique
     */ 
    public function setDescriptionRubrique($descriptionRubrique)
    {
        $this->descriptionRubrique = $descriptionRubrique;
    }

    /**
     * Get the value of dateCreation
     */ 
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation
     */ 
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * Get the value of articles
     */ 
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set the value of articles
     */ 
    public function setArticles($articles)
    {
        $this->articles = $articles;
    }
}