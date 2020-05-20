<?php

use libs\system\Controller;
use src\model\VideoRepository;

class VideoController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function ajouter(){
        return $this->view->load("pages/lutte/video/add");
    }

    public function liste(){
        $video_db = new VideoRepository;
        $data['liste_videos'] = $video_db->listeVideo();
        $this->view->load('pages/lutte/video/listing',$data);
    }

    public function add()
    {
        if(isset($_POST['valider']))
        {
            extract($_POST);
            $video = new Video;
            $video->setDateVideo($date);
            $video->setLieuVideo($lieu);
            $video->setTypeVideo($type);
            $video->setTag($tag);

            $video_db = new VideoRepository;
            $video_db->addVideo($video);
            return header("location:$url_base/Video/liste");
        }
    }

    public function update()
    {
            extract($_POST);
            $video = new Photo;
            $video->setIdPhoto($id);
            $video->setDossierPhoto($dossier);
            $video->setDatePhoto($date);
            $video->setLieuPhoto($lieu);
            $video->setTypePhoto($type);
            $video->setTag($tag);

            $video_db = new VideoRepository;
            $video_db->updateVideo($video);
            return header("location:$url_base/Photo/liste");
    }

    public function edit($id){
        $video_db = new VideoRepository;
        $data['video'] = $video_db->getVideo($id);
        return $this->view->load("pages/lutte/video/edit", $data);
    }
    
}
