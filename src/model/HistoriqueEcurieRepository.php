<?php

namespace src\model;

use libs\system\Model;
use HistoriqueEcurie;

class HistoriqueEcurieRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une HistoriqueEcurie
     *
     * @param int $id
     * @return HistoriqueEcurie
     */
    public function getHistoriqueEcurie($id)
    {
        return $this->db->getRepository('HistoriqueEcurie')->find(array('idHistoriqueEcurie' => $id));
    }

    /**
     * Ajout d'une HistoriqueEcurie
     *
     * @param HistoriqueEcurie $historiqueEcurie
     * @return int
     */
    public function addHistoriqueEcurie($historiqueEcurie)
    {
        $this->db->persist($historiqueEcurie);
        $this->db->flush();

        return $historiqueEcurie->getIdHistoriqueEcurie();
    }

    /**
     * Modification d'une HistoriqueEcurie
     *
     * @param HistoriqueEcurie $historiqueEcurie
     * @return int
     */
    public function updateHistoriqueEcurie($historiqueEcurie)
    {
        $getHistoriqueEcurie = $this->db->find('HistoriqueEcurie', $historiqueEcurie->getIdHistoriqueEcurie());
        if ($getHistoriqueEcurie != null) {
            $getHistoriqueEcurie->setLutteur($historiqueEcurie->getLutteur());
            $getHistoriqueEcurie->setEcurie($historiqueEcurie->getEcurie());
            $getHistoriqueEcurie->setDatAehesion($historiqueEcurie->getDateAdhesion());
            $getHistoriqueEcurie->setDescription($historiqueEcurie->getDescription());
            $this->db->flush();
            return $historiqueEcurie->getIdHistoriqueEcurie();
        } else {
            die("Objet " . $historiqueEcurie->getIdHistoriqueEcurie() . " does not existe!!");
        }
    }

    /**
     * suppression d'une HistoriqueEcurie
     *
     * @param int $id
     */
    public function deleteHistoriqueEcurie($id)
    {
        $historiqueEcurie = $this->db->find('HistoriqueEcurie', $id);
        if ($historiqueEcurie != null) {
            $this->db->remove($historiqueEcurie);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des HistoriqueEcuries
     * @return HistoriqueEcurie[]
     */

    public function listeHistoriqueEcuries()
    {
        return $this->db->getRepository('HistoriqueEcurie')->findAll();
    }

    public function getLutteur($id)
    {
        return $this->db->getRepository('Lutteur')->find(array('idLutteur' => $id));
    }
    public function getEcurie($id)
    {
        return $this->db->getRepository('Ecurie')->find(array('idLutteur' => $id));
    }
}