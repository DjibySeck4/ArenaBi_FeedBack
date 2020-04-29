<?php

namespace src\model;

use libs\system\Model;

class TournoiParticipantRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une TournoiLutte
     *
     * @param int $id
     * @return TournoiParticipant
     */
    public function getTournoiParticipant($id)
    {
        return $this->db->getRepository('TournoiParticipant')->find(array('idTournoiParticipant' => $id));
    }

    /**
     * Ajout d'une TournoiLutte
     *
     * @param TournoiParticipant $tournoiParticipant
     * @return int
     */
    public function addTournoiParticipant($tournoiParticipant)
    {
        $this->db->persist($tournoiParticipant);
        $this->db->flush();

        return $tournoiParticipant->getIdTournoiParticipant();
    }

    /**
     * Modification d'une TournoiParticipant
     *
     * @param TournoiParticipant $tournoiParticipant
     * @return int
     */
    public function updateTournoiParticipant($tournoiParticipant)
    {
        $getTournoiParticipant = $this->db->find('TournoiParticipant', $tournoiParticipant->getIdTournoiParticipant());
        if ($getTournoiParticipant != null) {
            $getTournoiParticipant->setNomTournoiParticipant($tournoiParticipant->getNomTournoiParticipant());
            $getTournoiParticipant->setDateDebut($tournoiParticipant->getDateDebut());
            $getTournoiParticipant->setDateFin($tournoiParticipant->getDateFin());
           
            $this->db->flush();
            return $tournoiParticipant->getIdTournoiParticipant();
        } else {
            die("Objet " . $tournoiParticipant->getIdTournoiParticipant() . " does not existe!!");
        }
    }

    /**
     * suppression d'une TournoiParticipant
     *
     * @param int $id
     */
    public function deleteTournoiParticipant($id)
    {
        $tournoiParticipant = $this->db->find('TournoiParticipant', $id);
        if ($tournoiParticipant != null) {
            $this->db->remove($tournoiParticipant);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des TournoiParticipant
     * @return TournoiParticipant[]
     */

    public function listeTournoiParticipants()
    {
        return $this->db->getRepository('TournoiParticipant')->findAll();
    }

    public function getTournoiLutte($id)
    {
        return $this->db->getRepository('TournoiLutte')->find(array('idTournoiLutte' => $id));
    }

    public function getTournoiPoule($id)
    {
        return $this->db->getRepository('TournoiPoule')->find(array('idTournoiPoule' => $id));
    }
}