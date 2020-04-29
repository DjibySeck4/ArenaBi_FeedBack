<?php

namespace src\model;

use libs\system\Model;
use Ecurie;

class EcurieRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une Ecurie
     *
     * @param int $id
     * @return Ecurie
     */
    public function getEcurie($id)
    {
        return $this->db->getRepository('Ecurie')->find(array('idEcurie' => $id));
    }

    /**
     * Ajout d'une Ecurie
     *
     * @param Ecurie $ecurie
     * @return int
     */
    public function addEcurie($ecurie)
    {
        $this->db->persist($ecurie);
        $this->db->flush();

        return $ecurie->getIdEcurie();
    }

    /**
     * Modification d'une Ecurie
     *
     * @param Ecurie $ecurie
     * @return int
     */
    public function updateEcurie($ecurie)
    {
        $getEcurie = $this->db->find('Ecurie', $ecurie->getIdEcurie());
        if ($getEcurie != null) {
            $getEcurie->setNomEcurie($ecurie->getNomEcurie());
            $getEcurie->setDateCreation($ecurie->getDateCreation());
            $getEcurie->setDescription($ecurie->getDescriptionEntraineur());
            $this->db->flush();
            return $ecurie->getIdEcurie();
        } else {
            die("Objet " . $ecurie->getIdEcurie() . " does not existe!!");
        }
    }

    /**
     * suppression d'une Ecurie
     *
     * @param int $id
     */
    public function deleteEcurie($id)
    {
        $ecurie = $this->db->find('Ecurie', $id);
        if ($ecurie != null) {
            $this->db->remove($ecurie);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des Ecuries
     * @return Ecurie[]
     */

    public function listeEcuries()
    {
        return $this->db->getRepository('Ecurie')->findAll();
    }

    public function getEntraineur($id)
    {
        return $this->db->getRepository('Entraineur')->find(array('idEntraineur' => $id));
    }
}