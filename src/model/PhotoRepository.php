<?php

namespace src\model; 

use libs\system\Model; 
	
class PhotoRepository extends Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function getPhoto($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Photo')->find(array('idPhoto' => $id));
		}
	}
	
	public function addPhoto($photo)
	{
		if($this->db != null)
		{
			$this->db->persist($photo);
			$this->db->flush();

			return $photo->getIdPhoto();
		}
	}
	
	public function deletePhoto($id){
		if($this->db != null)
		{
			$photo = $this->db->find('Photo', $id);
			if($photo != null)
			{
				$this->db->remove($photo);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updatePhoto($photo){
		if($this->db != null)
		{
			$getPhoto = $this->db->find('Photo', $photo->getIdPhoto());
			if($getPhoto != null)
			{
				$getPhoto->setIdPhoto($photo->getIdPhoto());
				$getPhoto->setDossierPhoto($photo->getDossierPhoto());
				$getPhoto->setDatePhoto($photo->getDatePhoto());
				$getPhoto->setLieuPhoto($photo->getLieuPhoto());
				$getPhoto->setTypePhoto($photo->getTypePhoto());
				$getPhoto->setTag($photo->getTag());
				$getPhoto->setDescription($photo->getDescription());
				$this->db->flush();

			}else {
				die("Objet ".$photo->getIdPhoto()." does not existe!!");
			}	
		}
	}
	
	public function listePhoto(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Photo t")->getResult();
		}
	}
	
	public function listePhotosById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Photo')->findBy(array('idPhoto' => $id));
		}
	}

	public function listePhotos()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Photo')->findAll();
		}
	}
	
}