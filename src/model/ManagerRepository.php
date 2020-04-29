<?php

namespace src\model;

use libs\system\Model;
use Manager;

class ManagerRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'une Manager
     *
     * @param int $id
     * @return Manager
     */
    public function getManager($id)
    {
        return $this->db->getRepository('Manager')->find(array('idManager' => $id));
    }

    /**
     * Ajout d'une Manager
     *
     * @param Manager $manager
     * @return int
     */
    public function addManager($manager)
    {
        $this->db->persist($manager);
        $this->db->flush();

        return $manager->getIdManager();
    }

    /**
     * Modification d'une Manager
     *
     * @param Manager $manager
     * @return int
     */
    public function updateManager($manager)
    {
        $getManager = $this->db->find('Manager', $manager->getIdManager());
        if ($getManager != null) {
            $getManager->getPersonne()->setNom($manager->getPersonne()->getNom());
            $getManager->getPersonne()->setPrenom($manager->getPersonne()->getPrenom());
            $getManager->getPersonne()->setSurnom($manager->getPersonne()->getsurnom());
            $getManager->getPersonne()->setDateNaissance($manager->getPersonne()->getDateNaissance());
            $getManager->getPersonne()->setAdresse($manager->getPersonne()->getAdresse());
            $getManager->getPersonne()->setVille($manager->getPersonne()->getVille());
            $getManager->getPersonne()->setPhotoPersonne($manager->getPersonne()->getPhotoPersonne());
            $getManager->getPersonne()->setMetierPersonne($manager->getPersonne()->getMetierPersonne());
            $getManager->getPersonne()->setSexe($manager->getPersonne()->getSexe());
            $getManager->getPersonne()->setNationalite($manager->getPersonne()->getNationalite());
            $getManager->setDescriptionManager($manager->getDescriptionManager());
            $this->db->flush();
            return $manager->getIdManager();
        } else {
            die("Objet " . $manager->getIdManager() . " does not existe!!");
        }
    }

    /**
     * suppression d'une Manager
     *
     * @param int $id
     */
    public function deleteManager($id)
    {
        $manager = $this->db->find('Manager', $id);
        if ($manager != null) {
            $this->db->remove($manager);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


    /**
     * Selection de l'enssemble des Managers
     * @return Manager[]
     */

    public function listeManagers()
    {
        return $this->db->getRepository('Manager')->findAll();
    }

    public function getPersonne($id)
    {
        return $this->db->getRepository('Personne')->find(array('idPersonne' => $id));
    }
}