<?php

namespace src\model;

use libs\system\Model; 
use Combat;

class CombatRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une Combat
     *
     * @param int $id
     * @return Combat
     */
    public function getCombat($id)
    {
        return $this->db->getRepository('Combat')->find(array('idCombat' => $id));
    }

    /**
     * Ajout d'une Combat
     *
     * @param Combat $combat
     * @return int
     */
    public function addCombat($combat)
    {
        $this->db->persist($combat);
        $this->db->flush();

        return $combat->getIdCombat();
    }
 
    /**
     * Modification d'une Combat
     *
     * @param Combat $combat
     * @return int
     */
    public function updateCombat($combat)
    {
        $getCombat = $this->getCombat($combat->getIdCombat());
        if ($getCombat != null) {
            $getCombat = $combat;
            /*foreach ($getCombat->getLutteurs() as $lutteur) {
                echo $lutteur->getIdLutteur();
                echo "<br>";
            }
            die;*/
            $this->db->flush();
            return $combat->getIdCombat();
        } else {
            die("Objet " . $combat->getIdCombat() . " does not existe!!");
        }
    }

    /**
     * suppression d'une Combat
     *
     * @param int $id
     */
    public function deleteCombat($id)
    {
        $combat = $this->db->find('Combat', $id);
        if ($combat != null) {
            $this->db->remove($combat);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des Combats
     * @return Combat[]
     */

    public function listeCombats()
    {
        return $this->db->getRepository('Combat')->findAll();
    }
    
    public function getLieuStade($id)
    {
        return $this->db->getRepository('StadeLieuCombat')->find(array('idLieuStade' => $id));
    }

    public function getPromoteur($id)
    {
        return $this->db->getRepository('Promoteur')->find(array('idPromoteur' => $id));
    }

    public function getJourneeCombat($id)
    {
        return $this->db->getRepository('JourneeLutte')->find(array('idJourneeLutte' => $id));
    }
    
    public function getTournoiLutte($id)
    {
        return $this->db->getRepository('TournoiLutte')->find(array('idTournoiLutte' => $id));
    }

    public function getLutteur($id)
    {
        return $this->db->getRepository('Lutteur')->find(array('idLutteur' => $id));
    }

    public function getArbitre($id)
    {
        return $this->db->getRepository('Arbitre')->find(array('idArbitre' => $id));
    }
}