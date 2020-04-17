<?php
use Doctrine\ORM\Annotation as ORM;
/**
 * @Entity 
 * @Table(name="bandeAnnonceCombat")
 **/
class BandeAnnonceCombat
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idBandeAnnonce;

    /** @Column(type="integer") **/
    private $idVideo;

     /** @Column(type="text") **/
    private $description;
   
    
    public function __construct()
    {
        
    }
   
    public function getIdBandeAnnonce()
    {
        return $this->idBandeAnnonce;
    }
    public function setIdBandeAnnonce($idBandeAnnonce)
    {
        $this->idBandeAnnonce = $idBandeAnnonce;
    }

    public function getIdVideo()
    {
        return $this->idVideo;
    }
    public function setIdVideo($idVideo)
    {
        $this->idVideo = $idVideo;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
}

?>