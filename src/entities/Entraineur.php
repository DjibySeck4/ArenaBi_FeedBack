
<?php

/** @Entity  */

class Entraineur extends Personne
{

    /** @column(type="string") */
    private $description;
    /**
     * @ManyToOne(targetEntity="Ecurie", inversedBy="entraineur")
     * @JoinColumn(name="ecurie_id", referencedColumnName="idEcurie")
     */
    private $idEcurie;
     
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getIdEcurie()
    {
        return $this->idEcurie;
    }
    public function setIdEcurie($idEcurie)
    {
        $this->idEcurie = $idEcurie;
    }
}
