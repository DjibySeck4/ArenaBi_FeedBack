<?php

use libs\system\Controller;
use src\model\ArbitreRepository;
use src\model\EntraineurRepository;
use src\model\PersonneRepository;

class EntraineurController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/personne/entraineur/add");
    }

    public function liste(){
        $entraineur_db = new EntraineurRepository;
        $data['liste_entraineurs'] = $entraineur_db->listeEntraineurs();
        $this->view->load('pages/personne/entraineur/listing',$data);
    }

    public function listePersonne(){
        $personne_db = new PersonneRepository;
        $personnes = $personne_db->listePersonnes();
        return $personnes;
    }

    public function add()
    {
        $personnes = $this->listePersonne();
        $entraineur_db = new EntraineurRepository;
        if(isset($_POST['valider']))
        {
            extract($_POST);

            $personne = $entraineur_db->getUnePersonne($nom, $prenom, $surnom, $dateNaissance, $adresse, $ville, $genre, $nationalite);
            if($personne != null)
            {
                $idPersonne = $personne[0]->getIdPersonne();
                $entraineur = new Entraineur();
                $entraineur->setPersonne($entraineur_db->getPersonne($idPersonne));
                
                $entraineur_db->addEntraineur($entraineur);
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
                $entraineur_db = new EntraineurRepository;
                $entraineur = new Entraineur();
                $entraineur->setPersonne($entraineur_db->getPersonne($id));
        
                // puis on ajoute Arbitre
                $entraineur_db->addEntraineur($entraineur);
                return $this->liste();    
        }     
    }

    public function update($idPersonne)
    {
        extract($_POST);
        
        $entraineur_db = new EntraineurRepository;
        $personne = $entraineur_db->getPersonne($idPersonne);
    
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
        return $this->view->load("pages/personne/entraineur/edit", $data);
    }  
}