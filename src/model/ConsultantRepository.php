<?php

namespace src\model;

use libs\system\Model;
use Consultant;

class ConsultantRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'un Consultant
     *
     * @param int $id
     * @return Consultant
     */
    public function getConsultant($id)
    {
        return $this->db->getRepository('Consultant')->find(array('idConsultant' => $id));
    }

    /**
     * Ajout d'un Consultant
     *
     * @param Consultant $consultant
     * @return int
     */
    public function addConsultant($consultant)
    {
        $this->db->persist($consultant);
        $this->db->flush();

        return $consultant->getIdConsultant();
    }

    /**
     * Modification d'un Consultant
     *
     * @param Consultant $consultant
     * @return int
     */
    public function updateConsultant($consultant)
    {
       $getConsultant = $this->db->find('Consultant', $consultant->getIdConsultant());
        if ($getConsultant != null) {
            $getConsultant->getPersonne()->setNom($consultant->getPersonne()->getNom());
            $getConsultant->getPersonne()->setPrenom($consultant->getPersonne()->getPrenom());
            $getConsultant->getPersonne()->setSurnom($consultant->getPersonne()->getsurnom());
            $getConsultant->getPersonne()->setDateNaissance($consultant->getPersonne()->getDateNaissance());
            $getConsultant->getPersonne()->setAdresse($consultant->getPersonne()->getAdresse());
            $getConsultant->getPersonne()->setVille($consultant->getPersonne()->getVille());
            $getConsultant->getPersonne()->setPhotoPersonne($consultant->getPersonne()->getPhotoPersonne());
            $getConsultant->getPersonne()->setMetierPersonne($consultant->getPersonne()->getMetierPersonne());
            $getConsultant->getPersonne()->setSexe($consultant->getPersonne()->getSexe());
            $getConsultant->getPersonne()->setNationalite($consultant->getPersonne()->getNationalite());
            $getConsultant->setDescriptionConsultant($consultant->getDescriptionConsultant());
            $getConsultant->setCombat($consultant->getCombats());
            $this->db->flush();
            return $consultant->getIdConsultant();
        } else {
            die("Objet " . $consultant->getIdConsultant() . " does not existe!!");
        }
    }

    /**
     * suppression d'un Consultant
     *
     * @param int $id
     */
    public function deleteConsultant($id)
    {
        $consultant = $this->db->find('Consultant', $id);
        if ($consultant != null) {
            $this->db->remove($consultant);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des Consultants
     * @return Consultant[]
     */

    public function listeConsultants()
    {
        return $this->db->getRepository('Consultant')->findAll();
    }

    public function getPersonne($id)
    {
        return $this->db->getRepository('Personne')->find(array('idPersonne' => $id));
    }
}