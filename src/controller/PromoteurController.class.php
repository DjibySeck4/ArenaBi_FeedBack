<?php

use libs\system\Controller;
use src\model\PersonneRepository;
use src\model\PromoteurRepository;

class PromoteurController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/personne/promoteur/add");
    }

    public function liste(){
        $promoteur_db = new PromoteurRepository;
        $data['liste_promoteurs'] = $promoteur_db->listePromoteurs();
        $this->view->load('pages/personne/promoteur/listing',$data);
    }

    public function listePersonne(){
        $personne_db = new PersonneRepository;
        $personnes = $personne_db->listePersonnes();
        return $personnes;
    }

    public function add()
    {
        $personnes = $this->listePersonne();
        $promoteur_db = new PromoteurRepository;
        if(isset($_POST['valider']))
        {
            extract($_POST);

            $personne = $promoteur_db->getUnePersonne($nom, $prenom, $surnom, $dateNaissance, $adresse, $ville, $genre, $nationalite);
            if($personne != null)
            {
                $idPersonne = $personne[0]->getIdPersonne();
                $promoteur = new Promoteur();
                $promoteur->setPersonne($promoteur_db->getPersonne($idPersonne));
                  $promoteur->setNomStructure($nomStructure);

                $promoteur_db->addPromoteur($promoteur);
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
                
                // on charge son id dans la table Promoteur
                $promoteur_db = new PromoteurRepository;
                $promoteur = new Promoteur();
                $promoteur->setPersonne($promoteur_db->getPersonne($id));
                $promoteur->setNomStructure($nomStructure);

                // puis on ajoute Promoteur
                $promoteur_db->addPromoteur($promoteur);
                return $this->liste();    
        }
        else{
            $this->view->load('pages/personne/promoteur/add');
        }     
    }

    public function update($idPersonne)
    {
        extract($_POST);
        
        $promoteur_db = new PromoteurRepository;
        $personne = $promoteur_db->getPersonne($idPersonne);
    
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
        $id = $personne_db->updatePersonne($personne);
    

         // on charge son id dans la table Promoteur
         $promoteur_db = new PromoteurRepository;
         $promoteur = new Promoteur();
         $promoteur->setNomStructure($nomStructure);
 
         $promoteur_db->updatePromoteur($promoteur);
         return $this->liste();      
    }

    
    public function edit($id){
        $personne_db = new PersonneRepository;
        $data['personne'] = $personne_db->getPersonne($id);
        return $this->view->load("pages/personne/promoteur/edit", $data);
    }
    
}