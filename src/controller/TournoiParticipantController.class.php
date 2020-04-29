<?php

use libs\system\Controller;
use src\model\ArbitreRepository;
use src\model\TournoiParticipantRepository;

class TournoiParticipantController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/tournoi/tournoiParticipant/add");
    }

    public function liste(){
        $arbitreDb = new ArbitreRepository;
        $data['liste_tournoi_participant'] = $arbitreDb->listeArbitres();
        $this->view->load('pages/autres/tournoi_participant/listing',$data);
    }

    public function add()
    {
        $tournoiParticipant_db = new TournoiParticipantRepository();
        $tournoiParticipant = new TournoiParticipant();
        
        $tournoiParticipant->setIdTournoiLutte($tournoiParticipant_db->getTournoiLutte(1));
        $tournoiParticipant->setIdTournoiPoule($tournoiParticipant_db->getTournoiPoule(1));
        
        $tournoiParticipant_db->addTournoiParticipant($tournoiParticipant);
    }

    public function edit($id)
    {
        $tournoiParticipant_db = new TournoiParticipantRepository();

        $tournoiParticipant = $tournoiParticipant_db->getTournoiParticipant($id);
        
        $tournoiParticipant->setIdTournoiLutte($tournoiParticipant_db->getTournoiLutte(1));
        $tournoiParticipant->setIdTournoiPoule($tournoiParticipant_db->getTournoiPoule(1));
        
        $tournoiParticipant_db->updateTournoiParticipant($tournoiParticipant);
    }
    
}
