<?php

namespace src\model;

use libs\system\Model;
use Arbitre;

class ArbitreRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'un Arbitre
     *
     * @param int $id
     * @return Arbitre
     */
    public function getArbitre($id)
    {
        return $this->db->getRepository('Arbitre')->find(array('idPersonne' => $id));
    }

    /**
     * Ajout d'un Arbitre
     *
     * @param Arbitre $arbitre
     * @return int
     */
    public function addArbitre($arbitre)
    {
        $this->db->persist($arbitre);
        $this->db->flush();

        return $arbitre->getIdArbitre();
    }


    /**
     * Modification d'un Arbitre
     *
     * @param Arbitre $arbitre
     * @return int
     */
    // public function updateArbitre($arbitre)
    // {
    //     // var_dump($arbitre); die;
    //    $getArbitre = $this->db->find('Arbitre', $arbitre->getIdArbitre());
    //     if ($getArbitre != null) {
    //         $getArbitre->getPersonne()->setIdPersonne($arbitre->getPersonne()->getIdPersonne());
    //         $getArbitre->getPersonne()->setNom($arbitre->getPersonne()->getNom());
    //         $getArbitre->getPersonne()->setPrenom($arbitre->getPersonne()->getPrenom());
    //         $getArbitre->getPersonne()->setSurnom($arbitre->getPersonne()->getsurnom());
    //         $getArbitre->getPersonne()->setDateNaissance($arbitre->getPersonne()->getDateNaissance());
    //         $getArbitre->getPersonne()->setAdresse($arbitre->getPersonne()->getAdresse());
    //         $getArbitre->getPersonne()->setVille($arbitre->getPersonne()->getVille());
    //         $getArbitre->getPersonne()->setPhotoPersonne($arbitre->getPersonne()->getPhotoPersonne());
    //         $getArbitre->getPersonne()->setMetierPersonne($arbitre->getPersonne()->getMetierPersonne());
    //         $getArbitre->getPersonne()->setSexe($arbitre->getPersonne()->getSexe());
    //         $getArbitre->getPersonne()->setNationalite($arbitre->getPersonne()->getNationalite());
    //         $getArbitre->setDescriptionArbitre($arbitre->getDescriptionArbitre());
    //         $getArbitre->setCombats($arbitre->getCombats);
    //         $this->db->flush();
    //         return $arbitre->getIdArbitre();
    //     } else {
    //         die("Objet " . $arbitre->getIdArbitre() . " does not existe!!");
    //     }
    // }

    /**
     * suppression d'une Arbitre
     *
     * @param int $id
     */
    public function deleteArbitre($id)
    {
        $arbitre = $this->db->find('Arbitre', $id);
        if ($arbitre != null) {
            $this->db->remove($arbitre);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des Arbitres
     * @return Arbitre[]
     */

    public function listeArbitres()
    {
        return $this->db->getRepository('Arbitre')->findAll();
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