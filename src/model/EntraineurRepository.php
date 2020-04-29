<?php

namespace src\model;

use libs\system\Model;
use Entraineur;

class EntraineurRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une Entraineur
     *
     * @param int $id
     * @return Entraineur
     */
    public function getEntraineur($id)
    {
        return $this->db->getRepository('Entraineur')->find(array('idEntraineur' => $id));
    }

    /**
     * Ajout d'une Entraineur
     *
     * @param Entraineur $entraineur
     * @return int
     */
    public function addEntraineur($entraineur)
    {
        $this->db->persist($entraineur);
        $this->db->flush();

        return $entraineur->getIdEntraineur();
    }

    /**
     * Modification d'une Entraineur
     *
     * @param Entraineur $entraineur
     * @return int
     */
    public function updateEntraineur($entraineur)
    {
        $getEntraineur = $this->db->find('Entraineur', $entraineur->getIdEntraineur());
        if ($getEntraineur != null) {
            $getEntraineur->getPersonne()->setNom($entraineur->getPersonne()->getNom());
            $getEntraineur->getPersonne()->setPrenom($entraineur->getPersonne()->getPrenom());
            $getEntraineur->getPersonne()->setSurnom($entraineur->getPersonne()->getsurnom());
            $getEntraineur->getPersonne()->setDateNaissance($entraineur->getPersonne()->getDateNaissance());
            $getEntraineur->getPersonne()->setAdresse($entraineur->getPersonne()->getAdresse());
            $getEntraineur->getPersonne()->setVille($entraineur->getPersonne()->getVille());
            $getEntraineur->getPersonne()->setPhotoEntraineur($entraineur->getPersonne()->getPhotoEntraineur());
            $getEntraineur->getPersonne()->setMetierEntraineur($entraineur->getPersonne()->getMetierEntraineur());
            $getEntraineur->getPersonne()->setSexe($entraineur->getPersonne()->getSexe());
            $getEntraineur->getPersonne()->setNationalite($entraineur->getPersonne()->getNationalite());
            $getEntraineur->setDescriptionEntraineur($entraineur->getDescriptionEntraineur());
            $getEntraineur->setEcurie($entraineur->getEcurie());
            $this->db->flush();
            return $entraineur->getIdEntraineur();
        } else {
            die("Objet " . $entraineur->getIdEntraineur() . " does not existe!!");
        }
    }

    /**
     * suppression d'une Entraineur
     *
     * @param int $id
     */
    public function deleteEntraineur($id)
    {
        $entraineur = $this->db->find('Entraineur', $id);
        if ($entraineur != null) {
            $this->db->remove($entraineur);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des Entraineurs
     * @return Entraineur[]
     */

    public function listeEntraineurs()
    {
        return $this->db->getRepository('Entraineur')->findAll();
    }

    public function getPersonne($id)
    {
        return $this->db->getRepository('Personne')->find(array('idPersonne' => $id));
    }
    public function getEcurie($id)
    {
        return $this->db->getRepository('Ecurie')->find(array('idEcurie' => $id));
    }
}