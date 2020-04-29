<?php

namespace src\model;

use libs\system\Model;
use HistoriquePoids;

class HistoriquePoidsRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une HistoriquePoids
     *
     * @param int $id
     * @return HistoriquePoids
     */
    public function getHistoriquePoids($id)
    {
        return $this->db->getRepository('HistoriquePoids')->find(array('idHistoriquePoids' => $id));
    }

    /**
     * Ajout d'une HistoriquePoids
     *
     * @param HistoriquePoids $historiquePoids
     * @return int
     */
    public function addHistoriquePoids($historiquePoids)
    {
        $this->db->persist($historiquePoids);
        $this->db->flush();

        return $historiquePoids->getIdHistoriquePoids();
    }

    /**
     * Modification d'une HistoriquePoids
     *
     * @param HistoriquePoids $historiquePoids
     * @return int
     */
    public function updateHistoriquePoids($historiquePoids)
    {
        $getHistoriquePoids = $this->db->find('HistoriquePoids', $historiquePoids->getIdHistoriquePoids());
        if ($getHistoriquePoids != null) {
            $getHistoriquePoids->setLutteur($historiquePoids->getLutteur());
            $getHistoriquePoids->setDatePoids($historiquePoids->getDatePoids());
            $getHistoriquePoids->setDescription($historiquePoids->getDescription());
            $getHistoriquePoids->setPoids($historiquePoids->getPoids());
            $this->db->flush();
            return $historiquePoids->getIdHistoriquePoids();
        } else {
            die("Objet " . $historiquePoids->getIdHistoriquePoids() . " does not existe!!");
        }
    }

    /**
     * suppression d'une HistoriquePoids
     *
     * @param int $id
     */
    public function deleteHistoriquePoids($id)
    {
        $historiquePoids = $this->db->find('HistoriquePoids', $id);
        if ($historiquePoids != null) {
            $this->db->remove($historiquePoids);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des HistoriquePoidss
     * @return HistoriquePoids[]
     */

    public function listeHistoriquePoidss()
    {
        return $this->db->getRepository('HistoriquePoids')->findAll();
    }

    public function getLutteur($id)
    {
        return $this->db->getRepository('Lutteur')->find(array('idLutteur' => $id));
    }
}