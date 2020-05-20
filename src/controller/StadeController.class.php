<?php

use libs\system\Controller;

use src\model\StadeLieuCombatRepository;

class StadeController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/lutte/stade/add");
    }

    public function liste(){
        $stade_db = new StadeLieuCombatRepository;
        $data['liste_stades'] = $stade_db->listeStadeLieuCombats();
        $this->view->load('pages/autres/stade/listing',$data);
    }

    public function add()
    {
        $stade_db = new StadeLieuCombatRepository;

        $stade = new StadeLieuCombat();
        $stade->setNomLieu("Je suis un message test");
        $stade->setVille("Tamba");
        $stade->setDescription("Je suis un message test");

        $stade_db->addStadeLieuCombat($stade);
    }

    public function edit($id)
    {
        $stade_db = new StadeLieuCombatRepository;
        $stade = $stade_db->getStadeLieuCombat($id);
       
        $stade->setNomLieu("Je suis un message");
        $stade->setVille("Tambaconda");
        $stade->setDescription("Je suis un message");

        $a = $stade_db->updateStadeLieuCombat($stade);
    }
    
}
