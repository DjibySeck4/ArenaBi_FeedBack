<?php

namespace src\model;

use libs\system\Model;
use Lutteur;

class LutteurRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une Lutteur
     *
     * @param int $id
     * @return Lutteur
     */
    public function getLutteur($id)
    {
        return $this->db->getRepository('Lutteur')->find(array('idLutteur' => $id));
    }

    /**
     * Ajout d'une Lutteur
     *
     * @param Lutteur $lutteur
     * @return int
     */
    public function addLutteur($lutteur)
    {
        $this->db->persist($lutteur);
        $this->db->flush();

        return $lutteur->getIdLutteur();
    }

    /**
     * Modification d'une Lutteur
     *
     * @param Lutteur $lutteur
     * @return int
     */
    public function updateLutteur($lutteur)
    {
        $getLutteur = $this->db->find('Lutteur', $lutteur->getIdLutteur());
        if ($getLutteur != null) {
            $getLutteur->getPersonne()->setNom($lutteur->getPersonne()->getNom());
            $getLutteur->getPersonne()->setPrenom($lutteur->getPersonne()->getPrenom());
            $getLutteur->getPersonne()->setSurnom($lutteur->getPersonne()->getsurnom());
            $getLutteur->getPersonne()->setDateNaissance($lutteur->getPersonne()->getDateNaissance());
            $getLutteur->getPersonne()->setAdresse($lutteur->getPersonne()->getAdresse());
            $getLutteur->getPersonne()->setVille($lutteur->getPersonne()->getVille());
            $getLutteur->getPersonne()->setPhotoPersonne($lutteur->getPersonne()->getPhotoPersonne());
            $getLutteur->getPersonne()->setMetierPersonne($lutteur->getPersonne()->getMetierPersonne());
            $getLutteur->getPersonne()->setSexe($lutteur->getPersonne()->getSexe());
            $getLutteur->getPersonne()->setNationalite($lutteur->getPersonne()->getNationalite());
            $getLutteur->setDescriptionLutteur($lutteur->getDescriptionLutteur());
            $getLutteur->setManager($lutteur->getManager());
            $this->db->flush();
            return $lutteur->getIdLutteur();
        } else {
            die("Objet " . $lutteur->getIdLutteur() . " does not existe!!");
        }
    }

    /**
     * suppression d'une Lutteur
     *
     * @param int $id
     */
    public function deleteLutteur($id)
    {
        $lutteur = $this->db->find('Lutteur', $id);
        if ($lutteur != null) {
            $this->db->remove($lutteur);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des Lutteurs
     * @return Lutteur[]
     */

    public function listeLutteurs()
    {
        return $this->db->getRepository('Lutteur')->findAll();
    }

    public function getPersonne($id)
    {
        return $this->db->getRepository('Personne')->find(array('idPersonne' => $id));
    }
    public function getManager($id)
    {
        return $this->db->getRepository('Manager')->find(array('idManager' => $id));
    }
}