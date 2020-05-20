<?php

namespace src\model; 

use libs\system\Model; 
	
class VideoRepository extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function getVideo($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Video')->find(array('idVideo' => $id));
		}
	}
	
	public function addVideo($video)
	{
		if($this->db != null)
		{
			$this->db->persist($video);
			$this->db->flush();

			return $video->getIdVideo();
		}
	}
	
	public function deleteVideo($id){
		if($this->db != null)
		{
			$video = $this->db->find('Video', $id);
			if($video != null)
			{
				$this->db->remove($video);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateVideo($video){
		if($this->db != null)
		{
			$getVideo = $this->db->find('Video', $video->getIdVideo());
			if($getVideo != null)
			{
				$getVideo->setIdVideo($video->getIdVideo());
				$getVideo->setDateVideo($video->getDateVideo());
				$getVideo->setLieuVideo($video->getLieuVideo());
				$getVideo->setTypeVideo($video->getTypeVideo());
				$getVideo->setTag($video->getTag());
				$getVideo->setDescription($video->getDescription());
				$this->db->flush();

			}else {
				die("Objet ".$video->getIdPhoto()." does not existe!!");
			}	
		}
	}
	
	public function listeVideo(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Video t")->getResult();
		}
	}
	
	public function listeVideosById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Video')->findBy(array('idVideo' => $id));
		}
	}

	public function listeVideos()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Video')->findAll();
		}
	}
	
}