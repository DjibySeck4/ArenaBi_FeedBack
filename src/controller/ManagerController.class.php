<?php

use Doctrine\ORM\Mapping\ManyToMany;
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

    public function listePersonne(){
        $personne_db = new PersonneRepository;
        $personnes = $personne_db->listePersonnes();
        return $personnes;
    }

    public function add()
    {
        $personnes = $this->listePersonne();
        $manager_db = new ManagerRepository;
        if(isset($_POST['valider']))
        {
            extract($_POST);

            $personne = $manager_db->getUnePersonne($nom, $prenom, $surnom, $dateNaissance, $adresse, $ville, $genre, $nationalite);
            if($personne != null)
            {
                $idPersonne = $personne[0]->getIdPersonne();
                $manager = new Manager();
                $manager->setPersonne($manager_db->getPersonne($idPersonne));

                $manager_db->addManager($manager);
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
                
                // on charge son id dans la table Manager
                $manager_db = new ManagerRepository;
                $manager = new Manager();
                $manager->setPersonne($manager_db->getPersonne($id));
        
                // puis on ajoute Manager
                $manager_db->addManager($manager);
                return $this->liste();    
        }
        else{
            $this->view->load('pages/personne/manager/add');
        }     
    }

    public function update($idPersonne)
    {
        extract($_POST);
        
        $manager_db = new ManagerRepository;
        $personne = $manager_db->getPersonne($idPersonne);
    
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
        return $this->view->load("pages/personne/manager/edit", $data);
    }
    
}