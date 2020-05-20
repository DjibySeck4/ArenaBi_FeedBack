<?php

use libs\system\Controller;
use src\model\ResultatCombatRepository;

class ResultatCombatController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/lutte/resultatCombat/add");
    }

    public function liste(){
        $resultatCombat_db = new ResultatCombatRepository;
        $data['liste_resultatCombats'] = $resultatCombat_db->listeResultatCombat();
        $this->view->load("pages/lutte/resultatCombat/add",$data);
    }

    public function add(){
        $resultatCombat_db = new ResultatCombatRepository;
        if(isset($_POST['valider']))
        {
            extract($_POST);
                
                // var_dump($designation); die;
                $resultatCombat = new ResultatCombat();
                
                // $resultatCombat->setDesignationresultatCombat(addslashes($designation));
                // $resultatCombat->setParticulariteresultatCombat(addslashes($particularite));
                // $resultatCombat->setExempleVideoPhoto(addslashes($photo_name));

                // $ok = $resultatCombat_db->addTyperesultatCombat($resultatCombat);
                // $data['ok'] = $ok;
                $this->liste();
                return header("location:pages/lutte/typeDeresultatCombat/listing", $data) ;
        }else{
            return $this->view->load("pages/lutte/typeDeresultatCombat/add");
        }
    }

    // public function update($idPersonne)
    // {
    //     extract($_POST);
        
    //     $resultatCombat_db = new ConsultantRepository;
    //     $personne = $resultatCombat_db->getPersonne($idPersonne);
    
    //     $photo_name = $_FILES['photo']['name'];
    //     $file_tmp_name = $_FILES['photo']['tmp_name'];
    //     move_uploaded_file($file_tmp_name,"./public/images/$photo_name");

    //     $personne = new Personne();
    //     $personne->setIdPersonne(addslashes($id));
    //     $personne->setNom(addslashes($nom));
    //     $personne->setPrenom(addslashes($prenom));
    //     $personne->setSurnom(addslashes($surnom));
    //     $personne->setDateNaissance(addslashes($dateNaissance));
    //     $personne->setAdresse(addslashes($adresse));
    //     $personne->setVille(addslashes($ville));
    //     $personne->setPhotoPersonne(addslashes($photo_name));
    //     $personne->setMetierPersonne(addslashes($metier));
    //     $personne->setSexe(addslashes($genre));
    //     $personne->setNationalite(addslashes($nationalite));
    //     $personne->setDescription($description);

    //     $personne_db = new PersonneRepository;
    //     $personne_db->updatePersonne($personne);
    
    //      return $this->liste();      
    // }

    
    // public function edit($id){
    //     $personne_db = new PersonneRepository;
    //     $data['personne'] = $personne_db->getPersonne($id);
    //     return $this->view->load("pages/personne/consultant/edit", $data);
    // }
    
}