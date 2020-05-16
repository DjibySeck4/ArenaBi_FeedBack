<?php

use libs\system\Controller;
use src\model\LutteurRepository;
use src\model\ManagerRepository;
use src\model\PersonneRepository;

class LutteurController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        // $lutteur_db = new LutteurRepository;
        // $data['liste_lutteurs'] = $lutteur_db->listeLutteurs();
        $manager = new ManagerRepository;
        $data["liste_managers"] = $manager->listeManagers();
        return $this->view->load("pages/personne/lutteur/add", $data);
    }

    public function liste(){
        $lutteur_db = new LutteurRepository;
        $data['liste_lutteurs'] = $lutteur_db->listeLutteurs();

        $this->view->load('pages/personne/lutteur/listing',$data);
    }

    public function listePersonne(){
        $personne_db = new PersonneRepository;
        $personnes = $personne_db->listePersonnes();
        return $personnes;
    }

    public function add()
    {
        $personnes = $this->listePersonne();
        $lutteur_db = new LutteurRepository;
        if(isset($_POST['valider']))
        {
            extract($_POST);

            $personne = $lutteur_db->getUnePersonne($nom, $prenom, $surnom, $dateNaissance, $adresse, $ville, $genre, $nationalite);
            if($personne != null)
            {
                // var_dump($manager); die;
                $idPersonne = $personne[0]->getIdPersonne();
                $lutteur = new Lutteur();
                $lutteur->setPersonne($lutteur_db->getPersonne($idPersonne));
                $lutteur->setDroitierOuGauchier($droitier_gauchier);
                $lutteur->setCategorieVipAutres($categorie);
                $lutteur->setManager($lutteur_db->getManager($manager));

                $lutteur_db->addLutteur($lutteur);

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
                
                // on charge son id dans la table Lutteur
                $lutteur_db = new LutteurRepository;
                $lutteur = new Lutteur();
                $lutteur->setPersonne($lutteur_db->getPersonne($id));
                $lutteur->setDroitierOuGauchier($droitier_gauchier);
                $lutteur->setCategorieVipAutres($categorie);
                $lutteur->setManager($lutteur_db->getManager($manager));
        
                // puis on ajoute Lutteur
                $lutteur_db->addLutteur($lutteur);
                header("location:$url_base/Lutteur/liste");
                // return $this->liste();    
        }
        else{
            $this->view->load('pages/personne/lutteur/add');
        }     
    }

    public function update($idPersonne)
    {
        extract($_POST);
        
        $lutteur_db = new LutteurRepository;
        $personne = $lutteur_db->getPersonne($idPersonne);
    
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
        return $this->view->load("pages/personne/lutteur/edit", $data);
    }
    
    public function getSurnom()
    {
        if(isset($_POST['q'])){
            if(isset($_POST['surnom'])){
                $lutteur_db = new LutteurRepository;
                $lutteurs = $lutteur_db->getLutteurBySurnom($_POST['surnom']);
                $tab = [];
                foreach ($lutteurs as $lutteur) {
                    $data['prenom'] = $lutteur->getPersonne()->getPrenom();
                    $data['nom'] = $lutteur->getPersonne()->getNom();
                    $data['description'] = $lutteur->getDescriptionLutteur();
                    $data['idPersonne'] = $lutteur->getPersonne()->getIdPersonne();
                    $tab[] = $data;
                }
                echo json_encode($tab);
            }
        }    
    }

}