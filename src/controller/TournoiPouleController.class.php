<?php

use libs\system\Controller;
use src\model\ConsultantRepository;
use src\model\PersonneRepository;
use src\model\TournoiPouleRepository;

class TournoiPouleController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/tournoi/tournoiPoule/add");
    }

    public function liste(){
        $tournoiPoule_db = new TournoiPouleRepository;
        $data['liste_consultants'] = $tournoiPoule_db->listeTournoiPoules();
        $this->view->load('pages/autres/tournoiPoule/listing',$data);
    }

    public function add()
    {
        $tournoiPoule  = new TournoiPoule();
        $tournoiPoule->setNomTournoiPoule("Je suis un tournoiPoule TEST");
        $tournoiPoule->setDateDebut("02/03/2019");
        $tournoiPoule->setDateFin("02/04/2019");
        
        $tournoiPoule_db = new TournoiPouleRepository;
        $tournoiPoule_db->addTournoiPoule($tournoiPoule);
    }

    public function edit($id)
    {
        $tournoiPoule_db = new TournoiPouleRepository();
        $tournoiPoule = $tournoiPoule_db->getTournoiPoule($id);

        $tournoiPoule->setNomTournoiPoule("Je suis un tournoiPoule");
        $tournoiPoule->setDateDebut("02/03/2012");
        $tournoiPoule->setDateFin("02/04/2012");
        $tournoiPoule_db = new TournoiPouleRepository;
        $a = $tournoiPoule_db->updateTournoiPoule($tournoiPoule);
    }
    
}
