<?php

use libs\system\Controller;
use src\model\ArbitreRepository;
use src\model\CombatRepository;
use src\model\PersonneRepository;

class CombatController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/lutte/combat/add");
    }

    public function liste(){
        $arbitreDb = new ArbitreRepository;
        $data['liste_combats'] = $arbitreDb->listeArbitres();
        $this->view->load('pages/autres/combat/listing',$data);
    }

    
    public function add()
    {

        $combatDb = new CombatRepository;

        $combat = new Combat();
        $combat->setIsGrandCombat(0);
        $combat->setDescription('combat ju jour');
        $combat->setDateCombat('2020-05-08');
        $combat->setNombreSpectateurs('700');
        $combat->setPromoteur($combatDb->getPromoteur(4));
        $combat->setLieuStade($combatDb->getLieuStade(2));
        $combat->setJourneeCombat($combatDb->getJourneeCombat(1));
        $combat->setTournoiLutte($combatDb->getTournoiLutte(1));
    
        $a = $combatDb->addCombat($combat);
        // $lutteur1 = $lutteurDb->getLutteur(4);
        // $lutteur2 = $lutteurDb->getLutteur(5);
        // // dans la table combat on doit avoir les lutteurs
        // $combat->addLutteur($lutteur1);
        // $combat->addLutteur($lutteur2); 

        // $lutteur1->addCombat($combat);
        // $lutteur2->addCombat($combat);
        // var_dump($a);
        // die;
    //     foreach ($combat->getLutteurs() as $lutteur) {
    //         echo $lutteur->getPersonne()->getNom();
    //         echo "<br>";
    //     }
    // //var_dump($combat->getLutteurs());
    // die;
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



