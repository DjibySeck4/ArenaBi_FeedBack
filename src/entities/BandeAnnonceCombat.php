<?php


/**
 * @Entity @Table(name="bandeAnnonceCombat")
 **/

class BandeAnnonceCombat
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idBandeAnnonceCombat;
    /**
     * @OneToOne(targetEntity="Combat", inversedBy="bandeAnnonceCombat")
     * @JoinColumn(name="idCombat", referencedColumnName="idCombat")
     */
    private $combat;
    // /**
    //  * @OneToOne(targetEntity="Video", inversedBy="bandeAnnonceCombat")
    //  * @JoinColumn(name="idVideo", referencedColumnName="idVideo")
    //  */
    // private $idVideo;
    /** @column(type="string", nullable=false) */
    private $description;

    /**
     * Get the value of idBandeAnnonceCombat
     */ 
    public function getIdBandeAnnonceCombat()
    {
        return $this->idBandeAnnonceCombat;
    }

    /**
     * Set the value of idBandeAnnonceCombat
     */ 
    public function setIdBandeAnnonceCombat($idBandeAnnonceCombat)
    {
        $this->idBandeAnnonceCombat = $idBandeAnnonceCombat;
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
}