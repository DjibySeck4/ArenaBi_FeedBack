<?php

/** @Entity  */

class Arbitre extends Personne
{
    /** @Column(type="integer", nullable=false, unique=true) @GeneratedValue */
    private $idArbitre;
    /** @column(type="string") */
    private $description;
    /**
     * @ManyToMany(targetEntity="Combat", mappedBy="arbitre")
     **/
    private $combats;

    
    public function getObservationArbitre()
    {
        return $this->observationArbitre;
    }
    public function setObservationArbitre($observationArbitre)
    {
        $this->observationArbitre = $observationArbitre;
    }

    public function getIdArbitre()
    {
        return $this->idArbitre;
    }
    public function setIdArbitre($idArbitre)
    {
        $this->idArbitre = $idArbitre;
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
