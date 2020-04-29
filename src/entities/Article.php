<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="article")
 **/
class Article
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idArticle;
    /** @Column(type="string", length=10, nullable=false) **/
    private $dateArticle;
    /** @Column(type="string", length=40, nullable=false) **/
    private $titreArticle;
    /** @Column(type="text", nullable=false) **/
    private $contenuArticle;
    /**
     * @ManyToOne(targetEntity="Rubrique", inversedBy="article")
     * @JoinColumn(name="idRubrique", referencedColumnName="idRubrique")
     */
    private $idRubrique;
    /** @Column(type="string", length=50, nullable=false) **/
    private $auteurArticle;
    /** @Column(type="string", length=30, nullable=false) **/
    private $tagArticle;
    /** @Column(type="string", length=20, nullable=false) **/
    private $imageArticle;
    /** @Column(type="boolean", nullable=false) **/
    private $isVisible;
    /**
     * @OneToMany(targetEntity="CommentaireArticle", mappedBy="article")
     */
    private $commentaires;


    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    /**
     * Get the value of idArticle
     */ 
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set the value of idArticle
     */ 
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;
    }

    /**
     * Get the value of dateArticle
     */ 
    public function getDateArticle()
    {
        return $this->dateArticle;
    }

    /**
     * Set the value of dateArticle
     */ 
    public function setDateArticle($dateArticle)
    {
        $this->dateArticle = $dateArticle;
    }

    /**
     * Get the value of titreArticle
     */ 
    public function getTitreArticle()
    {
        return $this->titreArticle;
    }

    /**
     * Set the value of titreArticle
     */ 
    public function setTitreArticle($titreArticle)
    {
        $this->titreArticle = $titreArticle;
    }

    /**
     * Get the value of contenuArticle
     */ 
    public function getContenuArticle()
    {
        return $this->contenuArticle;
    }

    /**
     * Set the value of contenuArticle
     */ 
    public function setContenuArticle($contenuArticle)
    {
        $this->contenuArticle = $contenuArticle;
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
     * Get the value of auteurArticle
     */ 
    public function getAuteurArticle()
    {
        return $this->auteurArticle;
    }

    /**
     * Set the value of auteurArticle
     */ 
    public function setAuteurArticle($auteurArticle)
    {
        $this->auteurArticle = $auteurArticle;
    }

    /**
     * Get the value of tagArticle
     */ 
    public function getTagArticle()
    {
        return $this->tagArticle;
    }

    /**
     * Set the value of tagArticle
     */ 
    public function setTagArticle($tagArticle)
    {
        $this->tagArticle = $tagArticle;
    }

    /**
     * Get the value of imageArticle
     */ 
    public function getImageArticle()
    {
        return $this->imageArticle;
    }

    /**
     * Set the value of imageArticle
     */ 
    public function setImageArticle($imageArticle)
    {
        $this->imageArticle = $imageArticle;
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

    /**
     * Get the value of commentaires
     */ 
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set the value of commentaires
     */ 
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;
    }
}
?>