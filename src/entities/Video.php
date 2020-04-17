<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="video")
 **/
class Video
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idVideo;

    /** @Column(type="string", length=20, nullable=true) **/
    private $dateVideo;

    /** @Column(type="string", length=60, nullable=true) **/
    private $lieuVideo;

    /** @Column(type="string", length=60, nullable=true) **/
    private $typeVideo;

    /** @Column(type="string", length=30, nullable=true) **/
    private $tag;

    /**
     * Many video have one resultat_combat. This is the owning side.
     * @ManyToOne(targetEntity="ResultatCombat", inversedBy="videos")
     * @JoinColumn(name="resultat_id", referencedColumnName="idResultat")
     */
    private $resultatCombat;
    
    public function __construct()
    {
      
    }
    public function getIdVideo()
    {
        return $this->idVideo;
    }
    public function setIdVideo($idVideo)
    {
        $this->idVideo = $idVideo;
    }

    public function getDateVideo()
    {
        return $this->dateVideo;
    }
    public function setDateVideo($dateVideo)
    {
        $this->dateVideo = $dateVideo;
    }

    public function getLieuVideo()
    {
        return $this->lieuVideo;
    }
    public function setLieuVideo($lieuVideo)
    {
        $this->lieuVideo = $lieuVideo;
    }

    public function getTypeVideo()
    {
        return $this->typeVideo;
    }
    public function setTypeVideo($typeVideo)
    {
        $this->typeVideo = $typeVideo;
    }

    public function getTag()
    {
        return $this->tag;
    }
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    public function getResultatCombat()
    {
        return $this->resultatCombat;
    }
    public function setResultatCombat($resultatCombat)
    {
        $this->resultatCombat = $resultatCombat;
    }
}

?>