<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 **/
class Lutteur extends Personne
{
   /** @Column(type="string", length=50, nullable=true) **/
   private $droitierOuGauchier;

   /** @Column(type="string", length=10, nullable=false) **/
   private $categorieVipAutres;

    /**@column(type="string") */
    private $description;
    
   /**.
     * @ManyToMany(targetEntity="Combat", mappedBy="lutteur")
     */
    private $combats;

   
    public function __construct()
    {
      
    }
    
   public function getDroitierOuGauchier()
   {
      return $this->droitierOuGauchier;
   }
   public function setDroitierOuGauchier($droitierOuGauchier)
   {
      $this->droitierOuGauchier = $droitierOuGauchier;
   }

   public function getCategorieVipAutres()
   {
      return $this->categorieVipAutres;
   }
   public function setCategorieVipAutres($categorieVipAutres)
   {
      $this->categorieVipAutres = $categorieVipAutres;
   }

    public function getTournoiLutte()
    {
        return $this->tournoiLutte;
    }
    public function setTournoiLutte($tournoiLutte)
    {
        $this->tournoiLutte = $tournoiLutte;
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