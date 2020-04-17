<?php

/** @Entity  */

class Promoteur extends Personne
{
    /** @column(type="string", length=20, nullable=false) */
    private $nomStructure;
    /** @column(type="string") */
    private $description;
    /**
     * @OneToMany(targetEntity="Combat", mappedBy="promoteur")
     **/
    private $combats;

    public function getNomStructure()
    {
        return $this->nomStructure;
    }
    public function setNomStructure($nomStructure)
    {
        $this->nomStructure = $nomStructure;
    }

    public function getCombats()
    {
        return $this->combats;
    }
    public function setCombats($combats)
    {
        $this->combats = $combats;
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
