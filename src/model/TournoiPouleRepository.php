<?php

namespace src\model;

use libs\system\Model;

class TournoiPouleRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une TournoiLutte
     *
     * @param int $id
     * @return TournoiPoule
     */
    public function getTournoiPoule($id)
    {
        return $this->db->getRepository('TournoiPoule')->find(array('idTournoiPoule' => $id));
    }

    /**
     * Ajout d'une TournoiLutte
     *
     * @param TournoiPoule $tournoiPoule
     * @return int
     */
    public function addTournoiPoule($tournoiPoule)
    {
        $this->db->persist($tournoiPoule);
        $this->db->flush();

        return $tournoiPoule->getIdTournoiPoule();
    }

    /**
     * Modification d'une TournoiPoule
     *
     * @param TournoiPoule $tournoiPoule
     * @return int
     */
    public function updateTournoiPoule($tournoiPoule)
    {
        $getTournoiPoule = $this->db->find('TournoiPoule', $tournoiPoule->getIdTournoiPoule());
        if ($getTournoiPoule != null) {
            $getTournoiPoule->setNomTournoiPoule($tournoiPoule->getNomTournoiPoule());
            $getTournoiPoule->setDateDebut($tournoiPoule->getDateDebut());
            $getTournoiPoule->setDateFin($tournoiPoule->getDateFin());
           
            $this->db->flush();
            return $tournoiPoule->getIdTournoiPoule();
        } else {
            die("Objet " . $tournoiPoule->getIdTournoiPoule() . " does not existe!!");
        }
    }

    /**
     * suppression d'une TournoiPoule
     *
     * @param int $id
     */
    public function deleteTournoiPoule($id)
    {
        $tournoiPoule = $this->db->find('TournoiPoule', $id);
        if ($tournoiPoule != null) {
            $this->db->remove($tournoiPoule);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des TournoiPoule
     * @return TournoiPoule[]
     */

    public function listeTournoiPoules()
    {
        return $this->db->getRepository('TournoiPoule')->findAll();
    }

    // public function getPromoteur($id){
    //     return $this->db->getRepository('Promoteur')->find(array('idPromoteur' => $id));
    // }
}