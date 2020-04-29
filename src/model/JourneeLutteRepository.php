<?php

namespace src\model;

use libs\system\Model;
use JourneeLutte;

class JourneeLutteRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une JourneeLutte
     *
     * @param int $id
     * @return JourneeLutte
     */
    public function getJourneeLutte($id)
    {
        return $this->db->getRepository('JourneeLutte')->find(array('idJourneeLutte' => $id));
    }

    /**
     * Ajout d'une JourneeLutte
     *
     * @param JourneeLutte $journeeLutte
     * @return int
     */
    public function addJourneeLutte($journeeLutte)
    {
        $this->db->persist($journeeLutte);
        $this->db->flush();

        return $journeeLutte->getIdJourneeLutte();
    }

    /**
     * Modification d'une JourneeLutte
     *
     * @param JourneeLutte $journeeLutte
     * @return int
     */
    public function updateJourneeLutte($journeeLutte)
    {
        $getJourneeLutte = $this->db->find('JourneeLutte', $journeeLutte->getIdJourneeLutte());
        if ($getJourneeLutte != null) {
            $getJourneeLutte->setDateJournee($journeeLutte->getDateJournee());
            $getJourneeLutte->setLettreNumJouneeA_Z($journeeLutte->getLettreNumJouneeA_Z());
            $getJourneeLutte->setNumJourneeDeLaSaison($journeeLutte->getNumJourneeDeLaSaison());
            $getJourneeLutte->setDescription($journeeLutte->getDescription());
            $this->db->flush();
            return $journeeLutte->getIdJourneeLutte();
        } else {
            die("Objet " . $journeeLutte->getIdJourneeLutte() . " does not existe!!");
        }
    }

    /**
     * suppression d'une JourneeLutte
     *
     * @param int $id
     */
    public function deleteJourneeLutte($id)
    {
        $journeeLutte = $this->db->find('JourneeLutte', $id);
        if ($journeeLutte != null) {
            $this->db->remove($journeeLutte);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des JourneeLuttes
     * @return JourneeLutte[]
     */

    public function listeJourneeLuttes()
    {
        return $this->db->getRepository('JourneeLutte')->findAll();
    }
}