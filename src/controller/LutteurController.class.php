<?php

use libs\system\Controller;
use src\model\LutteurRepository;
use src\model\PersonneRepository;

class LutteurController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function liste(){
        $lutteur_db = new LutteurRepository;
        $data['liste_lutteurs'] = $lutteur_db->listeLutteurs();
        $this->view->load('pages/personne/lutteur/listing',$data);
    }

    public function add()   
    {
        $lutteur_db = new LutteurRepository;

        $lutteur = new Lutteur();
        $lutteur->setDroitierOuGauchier("Gauchier");
        $lutteur->setCategorieVipAutres("Vip");
        $lutteur->setDescriptionLutteur("C'est Tyson 1");

        $lutteur->setPersonne($lutteur_db->getPersonne(7));
        $lutteur->setManager($lutteur_db->getManager(2));

        $lutteur_db->addLutteur($lutteur);
    }

    public function edit($id)
    {
        $lutteur_db = new LutteurRepository;
        $lutteur = $lutteur_db->getLutteur($id);
       
        $personne = $lutteur->getPersonne();
        $personne->setNom('Niass');
        $personne->setPrenom('Modou');
        $personne->setSurnom('Tyson');
        $personne->setDateNaissance('02/02/2002');
        $personne->setAdresse('Gnary Tally');
        $personne->setVille('Kaolack');
        $personne->setPhotoPersonne('ty.png');
        $personne->setMetierPersonne('lutteur');
        $personne->setSexe('M');
        $personne->setNationalite('Senegalais');
        $lutteur->setDroitierOuGauchier('Droitier');
        $lutteur->setCategorieVipAutres('Autres');
        $lutteur->setDescriptionLutteur('je suis une desc test');
      

        $personne_db = new PersonneRepository();
        $a = $personne_db->updatePersonne($personne);
        $lutteur->setPersonne($lutteur_db->getPersonne($a));

        $a = $lutteur_db->updateLutteur($lutteur);
        var_dump($lutteur_db->getLutteur($a)->getPersonne()->getPrenom());
        die;
    }
    
}
