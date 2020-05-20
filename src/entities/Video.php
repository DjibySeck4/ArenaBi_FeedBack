<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="video")
 **/
class Video
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idVideo;
    /**
     * @ManyToOne(targetEntity="ResultatCombat", inversedBy="video")
     * @JoinColumn(name="idResultat", referencedColumnName="idResultat")
     */
    private $idResultat;
    // /**
    //  * @OneToOne(targetEntity="BandeAnnonceCombat", mappedBy="video")
    //  */
    // private $bandeAnnonce;
    /** @Column(type="string", length=10, nullable=false) **/
    private $dateVideo;
    /** @Column(type="string", length=40, nullable=false) **/
    private $lieuVideo;
    /** @Column(type="string", length=20, nullable=false) **/
    private $typeVideo;
    /** @Column(type="string", length=20, nullable=false) **/
    private $tag;


    public function __construct()
    {
        $this->combats = new ArrayCollection();
    }

    /**
     * Get the value of idVideo
     */ 
    public function getIdVideo()
    {
        return $this->idVideo;
    }

    /**
     * Set the value of idVideo
     */ 
    public function setIdVideo($idVideo)
    {
        $this->idVideo = $idVideo;
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
     * Get the value of dateVideo
     */ 
    public function getDateVideo()
    {
        return $this->dateVideo;
    }

    /**
     * Set the value of dateVideo
     */ 
    public function setDateVideo($dateVideo)
    {
        $this->dateVideo = $dateVideo;
    }

    /**
     * Get the value of lieuVideo
     */ 
    public function getLieuVideo()
    {
        return $this->lieuVideo;
    }

    /**
     * Set the value of lieuVideo
     */ 
    public function setLieuVideo($lieuVideo)
    {
        $this->lieuVideo = $lieuVideo;
    }

    /**
     * Get the value of typeVideo
     */ 
    public function getTypeVideo()
    {
        return $this->typeVideo;
    }

    /**
     * Set the value of typeVideo
     */ 
    public function setTypeVideo($typeVideo)
    {
        $this->typeVideo = $typeVideo;
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
}