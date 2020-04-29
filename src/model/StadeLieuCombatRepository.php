<?php

namespace src\model;

use libs\system\Model;
use StadeLieuCombat;

class StadeLieuCombatRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une StadeLieuCombat
     *
     * @param int $id
     * @return StadeLieuCombat
     */
    public function getStadeLieuCombat($id)
    {
        return $this->db->getRepository('StadeLieuCombat')->find(array('idLieuStade' => $id));
    }

    /**
     * Ajout d'une StadeLieuCombat
     *
     * @param StadeLieuCombat $stadeLieuCombat
     * @return int
     */
    public function addStadeLieuCombat($stadeLieuCombat)
    {
        $this->db->persist($stadeLieuCombat);
        $this->db->flush();

        return $stadeLieuCombat->getIdLieuStade();
    }

    /**
     * Modification d'une StadeLieuCombat
     *
     * @param StadeLieuCombat $stadeLieuCombat
     * @return int
     */
    public function updateStadeLieuCombat($stadeLieuCombat)
    {
        $getStadeLieuCombat = $this->db->find('StadeLieuCombat', $stadeLieuCombat->getIdLieuStade());
        if ($getStadeLieuCombat != null) {
            $getStadeLieuCombat->setNomLieu($stadeLieuCombat->getNomLieu());
            $getStadeLieuCombat->setVille($stadeLieuCombat->getVille());
            $getStadeLieuCombat->setDescription($stadeLieuCombat->getDescription());
            $this->db->flush();
            return $stadeLieuCombat->getIdLieuStade();
        } else {
            die("Objet " . $stadeLieuCombat->getIdLieuStade() . " does not existe!!");
        }
    }

    /**
     * suppression d'une StadeLieuCombat
     *
     * @param int $id
     */
    public function deleteStadeLieuCombat($id)
    {
        $stadeLieuCombat = $this->db->find('StadeLieuCombat', $id);
        if ($stadeLieuCombat != null) {
            $this->db->remove($stadeLieuCombat);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des StadeLieuCombats
     * @return StadeLieuCombat[]
     */

    public function listeStadeLieuCombats()
    {
        return $this->db->getRepository('StadeLieuCombat')->findAll();
    }
}