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

    public function add()
    {
        
        $promoteur_db = new PromoteurRepository;

        $promoteur = new Promoteur();
        $promoteur->setDescriptionPromoteur("Je suis un message test");
        $promoteur->setPersonne($promoteur_db->getPersonne(5));

        $promoteur_db->addPromoteur($promoteur);
    }

    public function edit($id)
    {
        $promoteur_db = new PromoteurRepository();
        $promoteur = $promoteur_db->getPromoteur($id);
       
        $personne = $promoteur->getPersonne();
        $personne->setNom('Seck');
        $personne->setPrenom('gnohor');
        $personne->setSurnom('Samane');
        $personne->setDateNaissance('05/02/1988');
        $personne->setAdresse('Yof');
        $personne->setVille('Dakar');
        $personne->setPhotoPersonne('seck.png');
        $personne->setMetierPersonne('Developpeur');
        $personne->setSexe('Masculin');
        $personne->setNationalite('Senegalais');
        $promoteur->setNomStructure('Cayor');
        $promoteur->setDescriptionPromoteur('Samanemvc Le framework des Africains');

        $personne_db = new PersonneRepository();
        $a = $personne_db->updatePersonne($personne);
        $promoteur->setPersonne($promoteur_db->getPersonne($a));


        $a = $promoteur_db->updatePromoteur($promoteur);
        var_dump($promoteur_db->getPromoteur($a)->getPersonne()->getPrenom());
        die;
    }
    
}




// public function add()
// {
//     $lutteurDb = new LutteurRepository;
//     $combatDb = new CombatRepository;
//     $promoteurDb = new PromoteurRepository;
//     $stadeDb = new StadeLieuCombatRepository;

//     $combat = new Combat();
   
//     $combat->setDateCombat('2020-05-08');
//     $combat->setIsGrandCombat(0);
//     $combat->setDescription('Lorem ipsum dolor sit ame');
//     $combat->setPromoteur($promoteurDb->getPromoteur(1));
//     $combat->setLieuStade($stadeDb->getStadeLieuCombat(2));
  
//     $lutteur1 = $lutteurDb->getLutteur(4);
//     $lutteur2 = $lutteurDb->getLutteur(5);
//     // dans la table combat on doit avoir les lutteurs
//     $combat->addLutteur($lutteur1);
//     $combat->addLutteur($lutteur2); 

//     $lutteur1->addCombat($combat);
//     $lutteur2->addCombat($combat);
//     $a = $combatDb->addCombat($combat);
//     var_dump($a);
//     die;
//     foreach ($combat->getLutteurs() as $lutteur) {
//         echo $lutteur->getPersonne()->getNom();
//         echo "<br>";
//     }
//    //var_dump($combat->getLutteurs());
//    die;
//     $a = $combatDb->addCombat($combat);
//     foreach ($combat->getLutteurs() as $lutteur) {
//         echo $lutteur->getIdLutteur();
//         echo "<br>";
//     }

//     $a=1;
//     die;
//     $combat = $combatDb->getCombat($a);
//     foreach ($combat->getLutteurs() as $lutteur) {
//         echo $lutteur->getIdLutteur();
//         echo "<br>";
//     }

//     die;

//     var_dump(1);
//     die;
// }