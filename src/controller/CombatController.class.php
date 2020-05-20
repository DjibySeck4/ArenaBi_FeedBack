<?php

use libs\system\Controller;
use src\model\ArbitreRepository;
use src\model\CombatRepository;
use src\model\ConsultantRepository;
use src\model\LutteurRepository;
use src\model\PromoteurRepository;
use src\model\StadeLieuCombatRepository;
use src\model\TournoiLutteRepository;

class CombatController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){

        $lutteur_db = new LutteurRepository;
        $data['liste_lutteurs'] = $lutteur_db->listeLutteurs();

        $arbitre_db = new ArbitreRepository;
        $data['liste_arbitres'] = $arbitre_db->listeArbitres();

        $stade_db = new StadeLieuCombatRepository;
        $data['liste_stades'] = $stade_db->listeStadeLieuCombats();

        $promoteur_db = new PromoteurRepository;
        $data['liste_promoteurs'] = $promoteur_db->listePromoteurs();

        $tournoi_db = new TournoiLutteRepository;
        $data['liste_tournois'] = $tournoi_db->listeTournoiLuttes();

        $consultant_db = new ConsultantRepository;
        $data['liste_consultants'] = $consultant_db->listeConsultants();

        return $this->view->load("pages/lutte/combat/add", $data);
    }

    public function liste(){
        $combatDb = new CombatRepository;
        $data['liste_combats'] = $combatDb->listeCombats();
        $this->view->load('pages/lutte/combat/listing',$data);
    }

    
    public function add()
    {
        extract($_POST);
        $combatDb = new CombatRepository;

        $combat = new Combat(); 
        $combat->setIsGrandCombat($isGrandCombat);
        $combat->setDescription($description);
        $combat->setDateCombat($date);
        $combat->setPromoteur($combatDb->getPromoteur($promoteur));
        $combat->setLieuStade($combatDb->getLieuStade($stade));
        $combat->setJourneeCombat($combatDb->getJourneeCombat($jour));
        $combat->setTournoiLutte($combatDb->getTournoiLutte($tournoi));
    
        $combat->addLutteur($combatDb->getLutteur($lutteur1));
        $combat->addLutteur($combatDb->getLutteur($lutteur2)); 

        $combat->addArbitre($combatDb->getArbitre($arbitre1));
        $combat->addArbitre($combatDb->getArbitre($arbitre2));
        $combat->addArbitre($combatDb->getArbitre($arbitre3));
       

        foreach($combat->getArbitres() as $arbitre)
        {
            echo $arbitre->getPersonne()->getNom();
            echo "</br>";
        }
        die;
        // $lutteur1->addCombat($combat);
        // $lutteur2->addCombat($combat);
        var_dump($arbitre3); die;
       
        // $arbitre1->addCombat($combat);
        // $arbitre2->addCombat($combat);
        // $arbitre3->addCombat($combat);

       
        $combatDb->addCombat($combat);
        return header("location:$url_base/Combat/liste");
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

    public function update($id)
    {
        extract($_POST);
        $combatDb = new CombatRepository;
        $combat = new Combat(); 
        $combat->setIsGrandCombat($isGrandCombat);
        $combat->setDescription($description);
        $combat->setDateCombat($date);
        $combat->setPromoteur($combatDb->getPromoteur($promoteur));
        $combat->setLieuStade($combatDb->getLieuStade($stade));
        $combat->setJourneeCombat($combatDb->getJourneeCombat($jour));
        $combat->setTournoiLutte($combatDb->getTournoiLutte($tournoi));
    
        $lutteur1 = $lutteurDb->getLutteur($lutteur1);
        $lutteur2 = $lutteurDb->getLutteur($lutteur2);
        $combat->addLutteur($lutteur1);
        $combat->addLutteur($lutteur2); 
        
        $combatDb->updateCombat($combat);
        return header("location:$url_base/Combat/liste");
    }
    
}



