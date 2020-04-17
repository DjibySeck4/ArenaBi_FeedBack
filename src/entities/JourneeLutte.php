<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity 
 * @Table(name="journeeLutte")  
 **/
class JourneeLutte
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idJourneeLutte;

    /** @Column(type="string", length=10, nullable=false) **/
    private $DateJournee;

     /** @Column(type="string", length=1, nullable=true) **/
    private $lettreNumJournee;
   
     /** @Column(type="integer", nullable=false) **/
     private $numeroJourneeDaLaSaision;

    /** @Column(type="text", nullable=false) **/
    private $description;

    /**
     * One journneeLutte has many combats. This is the inverse side.
     * @OneToMany(targetEntity="Combat", mappedBy="journeeLutte")
     */
    private $combats;

    public function __construct()
    {
        $this->combats = new ArrayCollection();

    }


    public function getIdJourneeLutte()
    {
        return $this->idJourneeLutte;
    }
    public function setIdJourneeLutte($idJourneeLutte)
    {
        $this->idJourneeLutte = $idJourneeLutte;

        return $this;
    }

    public function getDateJournee()
    {
        return $this->DateJournee;
    }
    public function setDateJournee($DateJournee)
    {
        $this->DateJournee = $DateJournee;
    }

    public function getLettreNumJournee()
    {
        return $this->lettreNumJournee;
    }
    public function setLettreNumJournee($lettreNumJournee)
    {
        $this->lettreNumJournee = $lettreNumJournee;
    }

     public function getNumeroJourneeDaLaSaision()
     {
          return $this->numeroJourneeDaLaSaision;
     }
     public function setNumeroJourneeDaLaSaision($numeroJourneeDaLaSaision)
     {
          $this->numeroJourneeDaLaSaision = $numeroJourneeDaLaSaision;
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