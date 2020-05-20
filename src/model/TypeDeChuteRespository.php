<?php

namespace src\model;

use libs\system\Model;

class TypeDeChuteRepository extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    /** 
     * Selection d'un Arbitre
     *
     * @param int $id
     * @return TypeDeChute $typeDeChute
     */
    public function getTypeDeChute($id)
    {
        return $this->db->getRepository('TypeDeChute')->find(array('idTypeDeChute' => $id));
    }

    /**
     * Ajout d'un Arbitre
     *
     * @param TypeDeChute $typeDeChute
     * @return int
     */
    public function addTypeDeChute($typeDeChute)
    {
        $this->db->persist($typeDeChute);
        $this->db->flush();

        return $typeDeChute->getIdTypeDeChute();
    }


  
    // public function updateTypeDeChute($typeDeChute)
    // {
    //    $getTypeDeChute = $this->db->find('Typedechute', $typeDeChute->getIdTypeDeChute());
    //     if ($getTypeDeChute != null) {
    //         $getTypeDeChute->getPersonne()->setNom($typeDeChute->getPersonne()->getNom());
    //         $getTypeDeChute->getPersonne()->setPrenom($typeDeChute->getPersonne()->getPrenom());
            
    //         // $getTypeDeChute->setCombats($typeDeChute->getCombats);
    //         $this->db->flush();
    //         return $typeDeChute->getIdTypeDeChute();
    //     } else {
    //         die("Objet " . $typeDeChute->getIdTypeDeChute() . " does not existe!!");
    //     }
    // }

   
    public function deleteTypeDeChute($id)
    {
        $typeDeChute = $this->db->find('TypeDeChute', $id);
        if ($typeDeChute != null) {
            $this->db->remove($typeDeChute);
            $this->db->flush();
        } else {
            die("Objet " . $id . " does not existe!");
        }
    }

    public function listeTypeDeChutes()
    {
        return $this->db->getRepository('TypeDeChute')->findAll();
    }
}