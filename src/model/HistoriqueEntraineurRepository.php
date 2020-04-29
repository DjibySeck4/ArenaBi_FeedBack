<?php

namespace src\model;

use libs\system\Model;
use HistoriqueEntraineur;

class HistoriqueEntraineurRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une HistoriqueEntraineur
     *
     * @param int $id
     * @return HistoriqueEntraineur
     */
    public function getHistoriqueEntraineur($id)
    {
        return $this->db->getRepository('HistoriqueEntraineur')->find(array('idHistoriqueEntraineur' => $id));
    }

    /**
     * Ajout d'une HistoriqueEntraineur
     *
     * @param HistoriqueEntraineur $historiqueEntraineur
     * @return int
     */
    public function addHistoriqueEntraineur($historiqueEntraineur)
    {
        $this->db->persist($historiqueEntraineur);
        $this->db->flush();

        return $historiqueEntraineur->getIdHistoriqueEntraineur();
    }

    /**
     * Modification d'une HistoriqueEntraineur
     *
     * @param HistoriqueEntraineur $historiqueEntraineur
     * @return int
     */
    public function updateHistoriqueEntraineur($historiqueEntraineur)
    {
        $getHistoriqueEntraineur = $this->db->find('HistoriqueEntraineur', $historiqueEntraineur->getIdHistoriqueEntraineur());
        if ($getHistoriqueEntraineur != null) {
            $getHistoriqueEntraineur->setEntraineur($historiqueEntraineur->getEntraineur());
            $getHistoriqueEntraineur->setEcurie($historiqueEntraineur->getEcurie());
            $getHistoriqueEntraineur->setDatAehesion($historiqueEntraineur->getDateAdhesion());
            $getHistoriqueEntraineur->setDescription($historiqueEntraineur->getDescription());
            $this->db->flush();
            return $historiqueEntraineur->getIdHistoriqueEntraineur();
        } else {
            die("Objet " . $historiqueEntraineur->getIdHistoriqueEntraineur() . " does not existe!!");
        }
    }

    /**
     * suppression d'une HistoriqueEntraineur
     *
     * @param int $id
     */
    public function deleteHistoriqueEntraineur($id)
    {
        $historiqueEntraineur = $this->db->find('HistoriqueEntraineur', $id);
        if ($historiqueEntraineur != null) {
            $this->db->remove($historiqueEntraineur);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des HistoriqueEntraineurs
     * @return HistoriqueEntraineur[]
     */

    public function listeHistoriqueEntraineurs()
    {
        return $this->db->getRepository('HistoriqueEntraineur')->findAll();
    }

    public function getEntraineur($id)
    {
        return $this->db->getRepository('Entraineur')->find(array('idEntraineur' => $id));
    }
    public function getEcurie($id)
    {
        return $this->db->getRepository('Ecurie')->find(array('idEntraineur' => $id));
    }
}