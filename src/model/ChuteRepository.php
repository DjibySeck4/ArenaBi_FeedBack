<?php

namespace src\model;

use libs\system\Model;

class ChuteRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Selection d'un Chute
     *
     * @param int $id
     * @return Chute
     */
    public function getChute($id)
    {
        return $this->db->getRepository('TypeDeChute')->find(array('idTypeDeChute' => $id));
    }

    /**
     * Ajout d'un Chute
     *
     * @param TypeDeChute $typeDechute
     * @return int
     */
    public function addTypeChute($chute)
    {
        $this->db->persist($chute);
        $this->db->flush();

        return $chute->getIdTypeDeChute();
    }
    
    public function updateChute($chute)
    {
       $getChute = $this->db->find('TypeDeChute', $chute->getIdTypeDeChute());
        if ($getChute != null) {
            // $getChute->setIdTypeDeChute()($chute->getIdTypeDeChute());
            $getChute->setDesignationChute($chute->getDesignationChute());
            $getChute->setParticulariteChute($chute->getParticulariteChute());
            $getChute->setExempleVideoPhoto($chute->getExempleVideoPhoto());
            $this->db->flush();
            return $chute->getIdTypeDeChute();
        } else {
            die("Objet " . $chute->getIdTypeDeChute() . " does not existe!!");
        }
    }

    /**
     * suppression d'un type de chute
     *
     * @param int $id
     */
    public function deleteTypeDeChute($id)
    {
        $chute = $this->db->find('TypeDeChute', $id);
        if ($chute != null) {
            $this->db->remove($chute);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }


   
    // public function listeConsultants()
    // {
    //     return $this->db->getRepository('Consultant')->findAll();
    // }

    // public function getPersonne($id)
    // {
    //     return $this->db->getRepository('Personne')->find(array('idPersonne' => $id));
    // }

    // public function getUnePersonne($nom, $prenom, $surnom, $dateNaissance, $adresse, $ville, $sexe, $nationalite)
    // {
    //     return $this->db->getRepository('Personne')->findBy(array('nom' => $nom, 'prenom' => $prenom, 'surnom' => $surnom,
    //     'dateNaissance' => $dateNaissance, 'adresse' => $adresse, 'ville' => $ville, 'sexe' => $sexe, 'nationalite' => $nationalite));
    // }

    public function listeTypeDeChutes()
    {
        return $this->db->getRepository('TypeDeChute')->findAll();
    }
}
