<?php
/**
 * @Entity 
 * @Table(name="stadeArene")
 **/
class StadeArene
{ 
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idLieuStade;

    /** @Column(type="string") **/
    private $nomLieu;

     /** @Column(type="string") **/
    private $ville;

    /** @Column(type="text") **/
    private $description;

    /**
     * One stadeCombat has many combats. This is the inverse side.
     * @OneToMany(targetEntity="Combat", mappedBy="stadeCombat")
     */
    private $combats;

    public function __construct()
    {
        
    }
    public function getIdLieuStade()
    {
        return $this->idLieuStade;
    }
    public function setIdLieuStade($idLieuStade)
    {
        $this->idLieuStade = $idLieuStade;
    }

    public function getNomLieu()
    {
        return $this->nomLieu;
    }
    public function setNomLieu($nomLieu)
    {
        $this->nomLieu = $nomLieu;
    }

    public function getVille()
    {
        return $this->ville;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getCombats()
    {
        return $this->combats;
    }
    public function setCombats($combats)
    {
        $this->combats = $combats;
    }
}

?>