<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="resultatCombat")
 **/
class ResultatCombat
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idResultat;
    /**
     * @OneToOne(targetEntity="Combat", inversedBy="resultatCombat",cascade={"persist"})
     * @JoinColumn(name="idCombat", referencedColumnName="idCombat")
     */
    private $combat;
    /** @column(type="integer") */
    private $dureeCombat;
    /** @column(type="integer") */
    private $idVainqueur;
    /** @column(type="integer") */
    private $idPerdant;
    /**  @Column(type="string") **/
    private $description;
    /**  @Column(type="boolean") **/
    private $isMatchNull;
    /**  @Column(type="boolean") **/
    private $isSansVerdict;
    /**
     * @ManyToOne(targetEntity="TypeDeChute", inversedBy="resultatCombat")
     * @JoinColumn(name="idTypeDeChute", referencedColumnName="idTypeDeChute")
     */
    private $typeDeChute;
    /**
     * @OneToMany(targetEntity="Photo", mappedBy="resultatCombat")
     **/
    private $photos;
    /**
     * @OneToMany(targetEntity="Video", mappedBy="resultatCombat")
     **/
    private $videos;



    public function __construct()
    {
        $this->photos = new ArrayCollection();
        $this->videos = new ArrayCollection();
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
     * Get the value of dureeCombat
     */ 
    public function getDureeCombat()
    {
        return $this->dureeCombat;
    }

    /**
     * Set the value of dureeCombat
     */ 
    public function setDureeCombat($dureeCombat)
    {
        $this->dureeCombat = $dureeCombat;
    }

    /**
     * Get the value of idVainqueur
     */ 
    public function getIdVainqueur()
    {
        return $this->idVainqueur;
    }

    /**
     * Set the value of idVainqueur
     */ 
    public function setIdVainqueur($idVainqueur)
    {
        $this->idVainqueur = $idVainqueur;
    }

    /**
     * Get the value of idPerdant
     */ 
    public function getIdPerdant()
    {
        return $this->idPerdant;
    }

    /**
     * Set the value of idPerdant
     */ 
    public function setIdPerdant($idPerdant)
    {
        $this->idPerdant = $idPerdant;
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

    /**
     * Get the value of isMatchNull
     */ 
    public function getIsMatchNull()
    {
        return $this->isMatchNull;
    }

    /**
     * Set the value of isMatchNull
     */ 
    public function setIsMatchNull($isMatchNull)
    {
        $this->isMatchNull = $isMatchNull;
    }

    /**
     * Get the value of isSansVerdict
     */ 
    public function getIsSansVerdict()
    {
        return $this->isSansVerdict;
    }

    /**
     * Set the value of isSansVerdict
     */ 
    public function setIsSansVerdict($isSansVerdict)
    {
        $this->isSansVerdict = $isSansVerdict;
    }

    /**
     * Get the value of photos
     */ 
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set the value of photos
     */ 
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    /**
     * Get the value of videos
     */ 
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * Set the value of videos
     */ 
    public function setVideos($videos)
    {
        $this->videos = $videos;
    }

    /**
     * Get the value of combat
     */ 
    public function getCombat()
    {
        return $this->combat;
    }

    /**
     * Set the value of combat
     */ 
    public function setCombat($combat)
    {
        $this->combat = $combat;
    }

    /**
     * Get the value of typeDeChute
     */ 
    public function getTypeDeChute()
    {
        return $this->typeDeChute;
    }

    /**
     * Set the value of typeDeChute
     */ 
    public function setTypeDeChute($typeDeChute)
    {
        $this->typeDeChute = $typeDeChute;
    }
}
?>