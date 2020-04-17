<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="photo")
 **/
class Photo
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idPhoto;

    /** @Column(type="string") **/
    private $dossiersPhoto;

    /** @Column(type="string" , length=20, nullable=true) **/
    private $datePhoto;

    /** @Column(type="string", length=60, nullable=true) **/
    private $lieuPhoto;

    /** @Column(type="string" , length=60, nullable=true) **/
    private $typePhoto;

    /** @Column(type="string", length=30, nullable=true) **/
    private $tag;

    /** @Column(type="string", length=60, nullable=true) **/
    private $auteurPhoto;
    
    /**
     * Many photo have one resultatCombat. This is the owning side.
     * @ManyToOne(targetEntity="ResultatCombat", inversedBy="photos")
     * @JoinColumn(name="resultat_id", referencedColumnName="idResultat")
     */
    private $resultatCombat;
    
    public function __construct()
    {

    }
    public function getIdPhoto()
    {
        return $this->idPhoto;
    }
    public function setIdPhoto($idPhoto)
    {
        $this->idPhoto = $idPhoto;
    }

    public function getDossiersPhoto()
    {
        return $this->dossiersPhoto;
    }
    public function setDossiersPhoto($dossiersPhoto)
    {
        $this->dossiersPhoto = $dossiersPhoto;
    }

    public function getDatePhoto()
    {
        return $this->datePhoto;
    }
    public function setDatePhoto($datePhoto)
    {
        $this->datePhoto = $datePhoto;
    }

    public function getLieuPhoto()
    {
        return $this->lieuPhoto;
    }
    public function setLieuPhoto($lieuPhoto)
    {
        $this->lieuPhoto = $lieuPhoto;
    }

    public function getTypePhoto()
    {
        return $this->typePhoto;
    }
    public function setTypePhoto($typePhoto)
    {
        $this->typePhoto = $typePhoto;
    }

    public function getTag()
    {
        return $this->tag;
    }
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    public function getAuteurPhoto()
    {
        return $this->auteurPhoto;
    }
    public function setAuteurPhoto($auteurPhoto)
    {
        $this->auteurPhoto = $auteurPhoto;
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