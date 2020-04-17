<?php

/** @Entity  */

class Manager extends Personne
{
    /**
     * @ManyToOne(targetEntity="Ecurie", inversedBy="manager")
     * @JoinColumn(name="idEcurie", referencedColumnName="idEcurie")
     */
    private $idEcurie;

    /** @column(type="string") */
    private $description;

    public function getIdEcurie()
    {
        return $this->idEcurie;
    }
    public function setIdEcurie($idEcurie)
    {
        $this->idEcurie = $idEcurie;
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
