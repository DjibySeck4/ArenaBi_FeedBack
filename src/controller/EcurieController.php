<?php

use libs\system\Controller;
use src\model\ArbitreRepository;
use src\model\EcurieRepository;
use src\model\EntraineurRepository;
use src\model\PersonneRepository;


class EcurieController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/lutte/ecurie/add");
    }

    public function liste(){
        $ecurie_db = new EcurieRepository;
        $data['liste_ecuries'] = $ecurie_db->listeEcuries();
        $this->view->load('pages/autres/ecurie/listing',$data);
    }

    public function add()
    {
        $ecurie_db = new EcurieRepository;

        $ecurie = new Ecurie();
        $ecurie->setNomEcurie("Ecurie Falay Mboolo");
        $ecurie->setDescriptionEntraineur("Je suis un message test");
        $ecurie->setDateCreation("02/05/2002");
        $ecurie->setIdEntraineur($ecurie_db->getEntraineur(5));

        $ecurie_db->addEcurie($ecurie);
    }

    public function edit($id)
    {
        $ecurie_db = new EcurieRepository;
        $ecurie = $ecurie_db->getEcurie($id);
        $entraineur_db = new EntraineurRepository;
        $entraineur = $entraineur_db->getEntraineur($id);
       
        $ecurie->setNomEcurie("Ecurie Mboolo");
        $ecurie->setDescriptionEntraineur("test");
        $ecurie->setDateCreation("02/05/2003");
        $ecurie->setIdEntraineur($ecurie_db->getEntraineur(2));

        $a = $ecurie_db->updateEcurie($ecurie);
    }
    
}
