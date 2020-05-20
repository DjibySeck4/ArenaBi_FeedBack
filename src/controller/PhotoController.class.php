<?php

use FontLib\Table\Type\head;
use libs\system\Controller;
use src\model\PhotoRepository;


class PhotoController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/lutte/photo/add");
    }

    public function liste(){
        $photo_db = new PhotoRepository;
        $data['liste_photos'] = $photo_db->listePhotos();
        $this->view->load('pages/lutte/photo/listing',$data);
    }

    public function add()
    {
        if(isset($_POST['valider']))
        {
            extract($_POST);
            $photo = new Photo;
            $photo->setDossierPhoto($dossier);
            $photo->setDatePhoto($date);
            $photo->setLieuPhoto($lieu);
            $photo->setTypePhoto($type);
            $photo->setTag($tag);
            $photo->setDescription($description);

            $photo_db = new PhotoRepository;
            $photo_db->addPhoto($photo);
            return header("location:$url_base/Photo/liste");
        }
    }

    public function update()
    {
            extract($_POST);
            $photo = new Photo;
            $photo->setIdPhoto($id);
            $photo->setDossierPhoto($dossier);
            $photo->setDatePhoto($date);
            $photo->setLieuPhoto($lieu);
            $photo->setTypePhoto($type);
            $photo->setTag($tag);
            $photo->setDescription($description);

            $photo_db = new PhotoRepository;
            $photo_db->updatePhoto($photo);
            return header("location:$url_base/Photo/liste");
    }

    public function edit($id){
        $photo_db = new PhotoRepository;
        $data['photo'] = $photo_db->getPhoto($id);
        return $this->view->load("pages/lutte/photo/edit", $data);
    }
    
}
