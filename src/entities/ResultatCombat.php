<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="resultatCombat")
 **/
class ResultatCombat
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idResultat;

     /** @column(type="integer") */
     private $idVainqueur;

     /** @column(type="integer") */
     private $idPerdant;
    /** @Column(type="integer", length=12, nullable=true) **/
    private $dureeCombat;

     /** @Column(type="boolean") **/
    private $isMatchNull;

    /** @Column(type="boolean") **/
    private $isSansVerdict;

    /** @Column(type="text") **/
    private $description;

   /**
    * @OneToOne(targetEntity="TypeDeChute")
    * @JoinColumn(name="typeDeChute_id", referencedColumnName="idTypeDeChute")
    */
    private $idTypeChute;

     /**
     * One  ResultatCombat has many videos. This is the inverse side.
     * @OneToMany(targetEntity="Video", mappedBy="resultatCombat")
     */
    private $videos;

    /**
     * One  ResultatCombat has many photos. This is the inverse side.
     * @OneToMany(targetEntity="Photo", mappedBy="resultatCombat")
     */
    private $photos;

     /**
     * @OneToOne(targetEntity="Combat", inversedBy="resultatCombats")
     * @JoinColumn(name="combat_id", referencedColumnName="idCombat")
     */
    private $idCombat;
    
    public function __construct()
    {
        $this->videos = new ArrayCollection();
        $this->idTypeChute = new ArrayCollection();
        $this->idCombat = new ArrayCollection();
    }
    public function getIdResultatCombat()
    {
        return $this->idResultat;
    }
    public function setIdResltatCombat($idResultat)
    {
        $this->id = $idResultat;
    }

    public function getDureeCombat()
    {
        return $this->dureeCombat;
    }
    public function setDureeCombat($dureeCombat)
    {
        $this->id = $dureeCombat;
    }

    public function isMatchNull()
    {
        return $this->isMatchNull;
    }
    public function setIsMatchNull($isMatchNull)
    {
        $this->isMatchNull = $isMatchNull;
    }

    public function isSansVerdict()
    {
        return $this->isSansVerdict;
    }
    public function setIsSansVerdict($isSansVerdict)
    {
        $this->isSansVerdict = $isSansVerdict;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getIdVainqueur()
    {
        return $this->idVainqueur;
    }
    public function setIdVainqueur($idVainqueur)
    {
        $this->idVainqueur = $idVainqueur;
    }

    public function getIdTypeChute()
    {
        return $this->idTypeChute;
    }
    public function setIdTypeChute($idTypeChute)
    {
        $this->idTypeChute = $idTypeChute;
    }

    public function getVideos()
    {
        return $this->videos;
    }
    public function setVideos($videos)
    {
        $this->videos = $videos;
    }

    public function getPhotos()
    {
        return $this->photos;
    }
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }
}

?>