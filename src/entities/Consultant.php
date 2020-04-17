<?php

/** @Entity  */

class Consultant extends Personne
{
    /** @column(type="text") */
    private $description;
    /**
     * @OneToMany(targetEntity="Combat", mappedBy="consultant")
     **/
    private $combats;

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
