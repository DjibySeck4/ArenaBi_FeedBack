<?php

namespace src\model;

use libs\system\Model;
use Consultant;

class ResultatCombatRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
   
    public function getResultatCombat($id)
    {
        return $this->db->getRepository('ResultatCombat')->find(array('idResultat' => $id));
    }

    /**
     * Ajout d'un Resultat d'un combat
     *
     * @param ResultatCombat $resultatCombat
     * @return int
     */
    public function addResultatCombat($resultatCombat)
    {
        $this->db->persist($resultatCombat);
        $this->db->flush();

        return $resultatCombat->getIdResultat();
    }
    
    // public function updateConsultant($resultatCombat)
    // {
    //    $getConsultant = $this->db->find('Consultant', $resultatCombat->getIdConsultant());
    //     if ($getConsultant != null) {
    //         $getConsultant->getPersonne()->setNom($resultatCombat->getPersonne()->getNom());
    //         $getConsultant->getPersonne()->setPrenom($resultatCombat->getPersonne()->getPrenom());
    //         $getConsultant->getPersonne()->setSurnom($resultatCombat->getPersonne()->getsurnom());
    //         $getConsultant->getPersonne()->setDateNaissance($resultatCombat->getPersonne()->getDateNaissance());
    //         $getConsultant->getPersonne()->setAdresse($resultatCombat->getPersonne()->getAdresse());
    //         $getConsultant->getPersonne()->setVille($resultatCombat->getPersonne()->getVille());
    //         $getConsultant->getPersonne()->setPhotoPersonne($resultatCombat->getPersonne()->getPhotoPersonne());
    //         $getConsultant->getPersonne()->setMetierPersonne($resultatCombat->getPersonne()->getMetierPersonne());
    //         $getConsultant->getPersonne()->setSexe($resultatCombat->getPersonne()->getSexe());
    //         $getConsultant->getPersonne()->setNationalite($resultatCombat->getPersonne()->getNationalite());
    //         $getConsultant->setDescriptionConsultant($resultatCombat->getDescriptionConsultant());
    //         $getConsultant->setCombat($resultatCombat->getCombats());
    //         $this->db->flush();
    //         return $resultatCombat->getIdConsultant();
    //     } else {
    //         die("Objet " . $resultatCombat->getIdConsultant() . " does not existe!!");
    //     }
    // }

    /**
     * suppression d'un resultat de combat
     *
     * @param int $id
     */
    public function deleteResultatCombat($id)
    {
        $resultatCombat = $this->db->find('ResultatCombat', $id);
        if ($resultatCombat != null) {
            $this->db->remove($resultatCombat);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }

    public function listeResultatCombat()
    {
        return $this->db->getRepository('ResultatCombat')->findAll();
    }

    public function getPersonne($id)
    {
        return $this->db->getRepository('Personne')->find(array('idPersonne' => $id));
    }
}
