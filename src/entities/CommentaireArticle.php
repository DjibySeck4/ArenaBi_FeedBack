<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="commentaireArticle")
 **/
class CommentaireArticle
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idCommentaireArticle;
    /**
     * @ManyToOne(targetEntity="Article", inversedBy="commentaireArticle")
     * @JoinColumn(name="idArticle", referencedColumnName="idArticle")
     */
    private $article;
    /** @Column(type="string", length=50, nullable=false) **/
    private $nomCommentateur;
    /** @Column(type="text", nullable=false) **/
    private $contenuCommentaire;
    /** @Column(type="string", length=50, nullable=false) **/
    private $emailCommentateur;

    /** @Column(type="string", length=10, nullable=false) **/
    private $dateCommentaire;
    /** @Column(type="string", length=20, nullable=false) **/
    private $ipCommentateur;

    /**
     * Get the value of idCommentaireArticle
     */ 
    public function getIdCommentaireArticle()
    {
        return $this->idCommentaireArticle;
    }

    /**
     * Set the value of idCommentaireArticle
     */ 
    public function setIdCommentaireArticle($idCommentaireArticle)
    {
        $this->idCommentaireArticle = $idCommentaireArticle;
    }

    /**
     * Get the value of nomCommentateur
     */ 
    public function getNomCommentateur()
    {
        return $this->nomCommentateur;
    }

    /**
     * Set the value of nomCommentateur
     */ 
    public function setNomCommentateur($nomCommentateur)
    {
        $this->nomCommentateur = $nomCommentateur;
    }

    /**
     * Get the value of contenuCommentaire
     */ 
    public function getContenuCommentaire()
    {
        return $this->contenuCommentaire;
    }

    /**
     * Set the value of contenuCommentaire
     */ 
    public function setContenuCommentaire($contenuCommentaire)
    {
        $this->contenuCommentaire = $contenuCommentaire;
    }

    /**
     * Get the value of emailCommentateur
     */ 
    public function getEmailCommentateur()
    {
        return $this->emailCommentateur;
    }

    /**
     * Set the value of emailCommentateur
     */ 
    public function setEmailCommentateur($emailCommentateur)
    {
        $this->emailCommentateur = $emailCommentateur;
    }

    /**
     * Get the value of dateCommentaire
     */ 
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * Set the value of dateCommentaire
     */ 
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;
    }

    /**
     * Get the value of ipCommentateur
     */ 
    public function getIpCommentateur()
    {
        return $this->ipCommentateur;
    }

    /**
     * Set the value of ipCommentateur
     */ 
    public function setIpCommentateur($ipCommentateur)
    {
        $this->ipCommentateur = $ipCommentateur;
    }

    /**
     * Get the value of article
     */ 
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set the value of article
     */ 
    public function setArticle($article)
    {
        $this->article = $article;
    }
}

?>