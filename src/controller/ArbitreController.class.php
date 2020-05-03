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

    public function listePersonne(){
        $personne_db = new PersonneRepository;
        $personnes = $personne_db->listePersonnes();
        return $personnes;
    }

    public function add()
    {
        $personnes = $this->listePersonne();
        $arbitre_db = new ArbitreRepository;
        if(isset($_POST['valider']))
        {
            extract($_POST);

            $personne = $arbitre_db->getUnePersonne($nom, $prenom, $surnom, $dateNaissance, $adresse, $ville, $genre, $nationalite);
            if($personne != null)
            {
                $idPersonne = $personne[0]->getIdPersonne();
                $arbitre = new Arbitre();
                $arbitre->setPersonne($arbitre_db->getPersonne($idPersonne));

                
                $arbitre_db->addArbitre($arbitre);
                return $this->liste();    
            }
                // var_dump($personne->getSurnom()); die;
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
                $personne->setSexe(addslashes($genre));
                $personne->setNationalite(addslashes($nationalite));
                $personne->setDescription($description);
                
                // on ajoute personne 
                $personne_db = new PersonneRepository;
                $id = $personne_db->addPersonne($personne);
                
                // on charge son id dans la table Arbitre
                $arbitre_db = new ArbitreRepository;
                $arbitre = new Arbitre();
                $arbitre->setPersonne($arbitre_db->getPersonne($id));
        
                // puis on ajoute Arbitre
                $arbitre_db->addArbitre($arbitre);
                return $this->liste();    
        }     
    }

    public function update($idPersonne)
    {
        extract($_POST);
        
        $arbitre_db = new ArbitreRepository;
        $personne = $arbitre_db->getPersonne($idPersonne);
    
        $photo_name = $_FILES['photo']['name'];
        $file_tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($file_tmp_name,"./public/images/$photo_name");

        $personne = new Personne();
        $personne->setIdPersonne(addslashes($id));
        $personne->setNom(addslashes($nom));
        $personne->setPrenom(addslashes($prenom));
        $personne->setSurnom(addslashes($surnom));
        $personne->setDateNaissance(addslashes($dateNaissance));
        $personne->setAdresse(addslashes($adresse));
        $personne->setVille(addslashes($ville));
        $personne->setPhotoPersonne(addslashes($photo_name));
        $personne->setMetierPersonne(addslashes($metier));
        $personne->setSexe(addslashes($genre));
        $personne->setNationalite(addslashes($nationalite));
        $personne->setDescription($description);

        $personne_db = new PersonneRepository;
        $personne_db->updatePersonne($personne);
    
         return $this->liste();      
    }

    
    public function edit($id){
        $personne_db = new PersonneRepository;
        $data['personne'] = $personne_db->getPersonne($id);
        return $this->view->load("pages/personne/arbitre/edit", $data);
    }
    
}