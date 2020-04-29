<?php

use libs\system\Controller;
use src\model\ArbitreRepository;
use src\model\PersonneRepository;
use src\model\TypeDeChuteRepository;

class TypeDeChuteController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/combat/typeDeChute/add");
    }

    public function liste(){
        $typeDeChute_db = new TypeDeChuteRepository();
        $data['liste_typedechutes'] = $typeDeChute_db->listeTypeDeChutes();
        $this->view->load('pages/autres/typeDeChute/listing',$data);
    }

    public function add()
    {
        $typeDeChute = new TypeDeChute();
        $typeDeChute->setDesignationChute("mbott");
        $typeDeChute->setParticulariteChute("geste avec les mains");
        $typeDeChute->setExempleVideoPhoto("vid_photo.png");
        
        $typeDeChute_db = new TypeDeChuteRepository;
        $ok = $typeDeChute_db->addTypeDeChute($typeDeChute);
        var_dump($ok);
        die;
    }

    public function edit($id)
    {
        $arbitreDb = new ArbitreRepository;
        $typeDeChute = $arbitreDb->getArbitre($id);
       
        $personne = $typeDeChute->getPersonne();
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
        $typeDeChute->setDescriptionArbitre('je suis une desc test');

        $personne_db = new PersonneRepository();
        $a = $personne_db->updatePersonne($personne);
        $typeDeChute->setPersonne($arbitreDb->getPersonne($a));

        $a = $arbitreDb->updateArbitre($typeDeChute);
        var_dump($arbitreDb->getArbitre($a)->getPersonne()->getPrenom());
        die;
    }
    
}
