<?php

use libs\system\Controller;
use src\model\ConsultantRepository;
use src\model\PersonneRepository;

class ConsultantController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/personne/consultant/add");
    }

    public function liste(){
        $consultant_db = new ConsultantRepository;
        $data['liste_consultants'] = $consultant_db->listeConsultants();
        $this->view->load('pages/personne/consultant/listing',$data);
    }

    public function add()
    {
        $consultant_db = new ConsultantRepository;
        $consultant = new Consultant();
        $consultant->setDescriptionConsultant("Je suis un consultant");
        $consultant->setPersonne($consultant_db->getPersonne(5));

        $consultant_db->addConsultant($consultant);
    }

    public function edit($id)
    {
        $consultant_db = new ConsultantRepository;
        // on recupere le consultant à editer
        $consultant = $consultant_db->getConsultant($id);
       
        // on set ses donnees personne et consultant
        $personne = $consultant->getPersonne();
        $personne->setNom('ndog');
        $personne->setPrenom('Galo');
        $personne->setSurnom('Samane');
        $personne->setDateNaissance('05/02/1988');
        $personne->setAdresse('Yof');
        $personne->setVille('Dakar');
        $personne->setPhotoPersonne('seck.png');
        $personne->setMetierPersonne('Developpeur');
        $personne->setSexe('Masculin');
        $personne->setNationalite('Senegalais');
        $consultant->setDescriptionConsultant('Africains');

        $personne_db = new PersonneRepository();
        $a = $personne_db->updatePersonne($personne);
       
        $consultant->setPersonne($consultant_db->getPersonne($a));
        $a = $consultant_db->updateConsultant($consultant);
        
        var_dump($consultant_db->getConsultant($a)->getPersonne()->getPrenom());
        die;
    }
    
}
