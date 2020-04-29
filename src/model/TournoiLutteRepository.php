<?php

namespace src\model;

use libs\system\Model;
use TournoiLutte;

class TournoiLutteRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une TournoiLutte
     *
     * @param int $id
     * @return TournoiLutte
     */
    public function getTournoiLutte($id)
    {
        return $this->db->getRepository('TournoiLutte')->find(array('idTournoiLutte' => $id));
    }

    /**
     * Ajout d'une TournoiLutte
     *
     * @param TournoiLutte $tournoiLutte
     * @return int
     */
    public function addTournoiLutte($tournoiLutte)
    {
        $this->db->persist($tournoiLutte);
        $this->db->flush();

        return $tournoiLutte->getIdTournoiLutte();
    }

    /**
     * Modification d'une TournoiLutte
     *
     * @param TournoiLutte $tournoiLutte
     * @return int
     */
    public function updateTournoiLutte($tournoiLutte)
    {
        $getTournoiLutte = $this->db->find('TournoiLutte', $tournoiLutte->getIdTournoiLutte());
        if ($getTournoiLutte != null) {
            $getTournoiLutte->setNomTournoi($tournoiLutte->getNomTournoi());
            $getTournoiLutte->setDateDebut($tournoiLutte->getDateDebut());
            $getTournoiLutte->setDateFin($tournoiLutte->getDateFin());
            $getTournoiLutte->setPromoteur($tournoiLutte->getPromoteur());
            $this->db->flush();
            return $tournoiLutte->getIdTournoiLutte();
        } else {
            die("Objet " . $tournoiLutte->getIdTournoiLutte() . " does not existe!!");
        }
    }

    /**
     * suppression d'une TournoiLutte
     *
     * @param int $id
     */
    public function deleteTournoiLutte($id)
    {
        $tournoiLutte = $this->db->find('TournoiLutte', $id);
        if ($tournoiLutte != null) {
            $this->db->remove($tournoiLutte);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des TournoiLuttes
     * @return TournoiLutte[]
     */

    public function listeTournoiLuttes()
    {
        return $this->db->getRepository('TournoiLutte')->findAll();
    }

    public function getPromoteur($id){
        return $this->db->getRepository('Promoteur')->find(array('idPromoteur' => $id));
    }
}