<?php

use libs\system\Controller;
use src\model\ChuteRepository;

class ChuteController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/lutte/typeDeChute/add");
    }

    public function liste(){
        $chute_db = new ChuteRepository;
        $data['liste_chutes'] = $chute_db->listeTypeDeChutes();
        $this->view->load('pages/lutte/typeDeChute/listing',$data);
    }

    public function add(){
        $chute_db = new ChuteRepository();
        if(isset($_POST['valider']))
        {
            extract($_POST);

            $photo_name = $_FILES['photo']['name'];
            $file_tmp_name = $_FILES['photo']['tmp_name'];
            move_uploaded_file($file_tmp_name,"./public/images/$photo_name");

            $data['ok'] = 0;
                $chute = new TypeDeChute();                
                $chute->setDesignationChute(addslashes($designation));
                $chute->setParticulariteChute(addslashes($particularite));
                $chute->setExempleVideoPhoto(addslashes($photo_name));

                $ok = $chute_db->addTypeChute($chute);
                $this->liste();
                return header("location:pages/lutte/typeDeChute/listing", $data) ;
        }else{
            return $this->view->load("pages/lutte/typeDeChute/add");
        }
    }

    public function update(){
        $chute_db = new ChuteRepository();
        extract($_POST);

        $photo_name = $_FILES['photo']['name'];
        $file_tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($file_tmp_name,"./public/images/$photo_name");

        $chute = new TypeDeChute();
        $chute->setIdTypeDeChute(addslashes($id));
        $chute->setDesignationChute(addslashes($designation));
        $chute->setParticulariteChute(addslashes($particularite));
        $chute->setExempleVideoPhoto(addslashes($photo_name));
        $chute_db->updateChute($chute);
        return $this->liste();  
    }

    
    public function edit($id){
        
        $chute_db = new ChuteRepository();
        $data['chute'] = $chute_db->getChute($id);
        return $this->view->load("pages/lutte/typeDeChute/edit", $data);
    }
    
}