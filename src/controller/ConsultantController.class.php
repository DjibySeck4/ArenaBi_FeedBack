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
        $data['liste_consultant'] = $consultant_db->listeConsultants();
        $this->view->load('pages/personne/consultant/listing',$data);
    }

    public function listePersonne(){
        $personne_db = new PersonneRepository;
        $personnes = $personne_db->listePersonnes();
        return $personnes;
    }

    public function add()
    {
        $consultant = $this->listePersonne();
        $consultant_db = new ConsultantRepository;
        if(isset($_POST['valider']))
        {
            extract($_POST);

            $personne = $consultant_db->getUnePersonne($nom, $prenom, $surnom, $dateNaissance, $adresse, $ville, $genre, $nationalite);
            if($personne != null)
            {
                $idPersonne = $personne[0]->getIdPersonne();
                $consultant = new Consultant();
                $consultant->setPersonne($consultant_db->getPersonne($idPersonne));
                $consultant_db->addConsultant($consultant);
                return $this->liste();    
            }
               
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
                
                $personne_db = new PersonneRepository;
                $id = $personne_db->addPersonne($personne);
                $consultant_db = new ConsultantRepository;
                $consultant = new Consultant();
                $consultant->setPersonne($consultant_db->getPersonne($id));
                $consultant_db->addConsultant($consultant);
                return $this->liste();    
        }     
    }

    public function update($idPersonne)
    {
        extract($_POST);
        
        $consultant_db = new ConsultantRepository;
        $personne = $consultant_db->getPersonne($idPersonne);
    
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
        return $this->view->load("pages/personne/consultant/edit", $data);
    }
    
}