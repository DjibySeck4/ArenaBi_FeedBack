<?php

use libs\system\Controller;
use src\model\ManagerRepository;
use src\model\PersonneRepository;

class ManagerController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/personne/manager/add");
    }

    public function liste(){
        $manager_db = new ManagerRepository;
        $data['liste_managers'] = $manager_db->listeManagers();
        $this->view->load('pages/personne/manager/listing',$data);
    }

    public function add()
    {
        $manager_db = new ManagerRepository;

        $manager = new Manager();
        $manager->setDescriptionManager("Je suis djiby le big manager");
        $manager->setPersonne($manager_db->getPersonne(5));

        $manager_db->addManager($manager);
    }

    public function edit($id)
    {
        $manager_db = new ManagerRepository;
        // on recupere le manager à editer
        $manager = $manager_db->getManager($id);
       
        // on set ses donnees personne et manager
        $personne = $manager->getPersonne();
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
        $manager->setDescriptionManager('Africains');

        $personne_db = new PersonneRepository();
        $a = $personne_db->updatePersonne($personne);
       
        $manager->setPersonne($manager_db->getPersonne($a));
        $a = $manager_db->updateManager($manager);
        
        var_dump($manager_db->getManager($a)->getPersonne()->getPrenom());
        die;
    }
    
}
