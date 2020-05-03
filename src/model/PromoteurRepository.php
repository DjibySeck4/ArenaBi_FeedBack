<?php

namespace src\model;

use libs\system\Model;
use Promoteur;

class PromoteurRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'un Promoteur
     *
     * @param int $id
     * @return Promoteur $promoteur
     */
    public function getPromoteur($id)
    {
        return $this->db->getRepository('Promoteur')->find(array('idPromoteur' => $id));
    }

    /**
     * Ajout d'un Promoteur
     *
     * @param Promoteur $promoteur
     * @return int
     */
    public function addPromoteur($promoteur)
    {
        $this->db->persist($promoteur);
        $this->db->flush();

        return $promoteur->getIdPromoteur();
    }

    /**
     * Modification d'une Promoteur
     *
     * @param Promoteur $promoteur
     * @return int
     */
    public function updatePromoteur($promoteur)
    {
        $getPromoteur = $this->db->find('Promoteur', $promoteur->getIdPromoteur());
        if ($getPromoteur != null) {
            $getPromoteur->getPersonne()->setNom($promoteur->getPersonne()->getNom());
            $getPromoteur->getPersonne()->setPrenom($promoteur->getPersonne()->getPrenom());
            $getPromoteur->getPersonne()->setSurnom($promoteur->getPersonne()->getsurnom());
            $getPromoteur->getPersonne()->setDateNaissance($promoteur->getPersonne()->getDateNaissance());
            $getPromoteur->getPersonne()->setAdresse($promoteur->getPersonne()->getAdresse());
            $getPromoteur->getPersonne()->setVille($promoteur->getPersonne()->getVille());
            $getPromoteur->getPersonne()->setPhotoPersonne($promoteur->getPersonne()->getPhotoPersonne());
            $getPromoteur->getPersonne()->setMetierPersonne($promoteur->getPersonne()->getMetierPersonne());
            $getPromoteur->getPersonne()->setSexe($promoteur->getPersonne()->getSexe());
            $getPromoteur->getPersonne()->setNationalite($promoteur->getPersonne()->getNationalite());
            $getPromoteur->getPersonne()->setDescription($promoteur->getPersonne()->getDescription());
            $this->db->flush();
            return $promoteur->getIdPromoteur();
        } else {
            die("Objet " . $promoteur->getIdPromoteur() . " does not existe!!");
        }
    }

    /**
     * suppression d'une Promoteur
     *
     * @param int $id
     */
    public function deletePromoteur($id)
    {
        $promoteur = $this->db->find('Promoteur', $id);
        if ($promoteur != null) {
            $this->db->remove($promoteur);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des Promoteurs
     * @return Promoteur[]
     */

    public function listePromoteurs()
    {
        return $this->db->getRepository('Promoteur')->findAll();
    }

    public function getPersonne($id)
    {
        return $this->db->getRepository('Personne')->find(array('idPersonne' => $id));
    }

    public function getUnePersonne($nom, $prenom, $surnom, $dateNaissance, $adresse, $ville, $sexe, $nationalite)
    {
        return $this->db->getRepository('Personne')->findBy(array('nom' => $nom, 'prenom' => $prenom, 'surnom' => $surnom,
        'dateNaissance' => $dateNaissance, 'adresse' => $adresse, 'ville' => $ville, 'sexe' => $sexe, 'nationalite' => $nationalite));
    }
} 