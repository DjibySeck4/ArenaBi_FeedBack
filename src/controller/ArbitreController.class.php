<?php

use libs\system\Controller;
use src\model\ArbitreRepository;
use src\model\PersonneRepository;

class ArbitreController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/personne/arbitre/add");
    }

    public function liste(){
        $arbitreDb = new ArbitreRepository;
        $data['liste_arbitres'] = $arbitreDb->listeArbitres();
        $this->view->load('pages/personne/arbitre/listing',$data);
    }

    public function add()
    {
        extract($_POST);
       
        $photo_name = $_FILES['photo']['name'];
        $file_tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($file_tmp_name,"./public/images/$photo_name");

        $personne = new Personne();
        $personne->setNom(addslashes($nom));
        $personne->setPrenom(addslashes($prenom));
        $personne->setSurnom(addslashes($surnom));
        $personne->setDateNaissance(addslashes($dateNaissance));
        $personne->setAdresse(addslashes($adresse));
        $personne->setVille(addslashes($ville));
        $personne->setPhotoPersonne(addslashes($photo_name));
        $personne->setMetierPersonne(addslashes($metier));
        $personne->setSexe(addslashes($sexe));
        $personne->setNationalite(addslashes($nationalite));
        // $personne->setDescription(addslashes($description));
        
        // on ajoute personne 
        $id = $this->personne_db->addPersonne($personne);
        
        // on charge son id dans la table Arbitre
        $arbitre = new Arbitre();
        $arbitre->setIdArbitre($this->arbitre_db->getPersonne($id));

        // puis on ajoute Arbitre
        $this->arbitre_db->addArbitre($arbitre);
        return $this->liste();

        // $arbitre_db = new ArbitreRepository;

        // $arbitre = new Arbitre();
        // $arbitre->setDescriptionArbitre("Je suis un message test");
        // $arbitre->setPersonne($arbitre_db->getPersonne(6));

        // $arbitre_db->addArbitre($arbitre);
    }

    public function edit($id)
    {
        $arbitreDb = new ArbitreRepository;
        $arbitre = $arbitreDb->getArbitre($id);
       
        $personne = $arbitre->getPersonne();
        $personne->setNom('Seck');
        $personne->setPrenom('Salif');
        $personne->setSurnom('DSS');
        $personne->setDateNaissance('01/11/2011');
        $personne->setAdresse('grand mbour');
        $personne->setVille('mbour');
        $personne->setPhotoPersonne('seck.png');
        $personne->setMetierPersonne('bilaal');
        $personne->setSexe('M');
        $personne->setNationalite('Senegalais');
        $arbitre->setDescriptionArbitre('je suis une desc test');

        $personne_db = new PersonneRepository();
        $a = $personne_db->updatePersonne($personne);
        $arbitre->setPersonne($arbitreDb->getPersonne($a));

        $a = $arbitreDb->updateArbitre($arbitre);
        var_dump($arbitreDb->getArbitre($a)->getPersonne()->getPrenom());
        die;
    }
    
}

