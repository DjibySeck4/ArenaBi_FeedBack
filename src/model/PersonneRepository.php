<?php

namespace src\model;

use libs\system\Model;
use Personne;

class PersonneRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une Personne
     *
     * @param int $id
     * @return Personne
     */
    public function getPersonne($id)
    {
        return $this->db->getRepository('Personne')->find(array('idPersonne' => $id));
    }

    /**
     * Ajout d'une Personne
     *
     * @param Personne $personne
     * @return int
     */
    public function addPersonne($personne)
    {
        $this->db->persist($personne);
        $this->db->flush();

        return $personne->getIdPersonne();
    }

    /**
     * Modification d'une Personne
     *
     * @param Personne $personne
     * @return int
     */
    public function updatePersonne($personne)
    {
        $getPersonne = $this->db->find('Personne', $personne->getIdPersonne());
        if ($getPersonne != null) {
            $getPersonne->setNom($personne->getNom());
            $getPersonne->setPrenom($personne->getPrenom());
            $getPersonne->setSurnom($personne->getsurnom());
            $getPersonne->setDateNaissance($personne->getDateNaissance());
            $getPersonne->setAdresse($personne->getAdresse());
            $getPersonne->setVille($personne->getVille());
            $getPersonne->setPhotoPersonne($personne->getPhotoPersonne());
            $getPersonne->setMetierPersonne($personne->getMetierPersonne());
            $getPersonne->setSexe($personne->getSexe());
            $getPersonne->setNationalite($personne->getNationalite());
            $this->db->flush();
            return $personne->getIdPersonne();
        } else {
            die("Objet " . $personne->getIdPersonne() . " does not existe!!");
        }
    }

    /**
     * suppression d'une Personne
     *
     * @param int $id
     */
    public function deletePersonne($id)
    {
        $personne = $this->db->find('Personne', $id);
        if ($personne != null) {
            $this->db->remove($personne);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des Personnes
     * @return Personne[]
     */

    public function listePersonnes()
    {
        return $this->db->getRepository('Personne')->findAll();
    }
}