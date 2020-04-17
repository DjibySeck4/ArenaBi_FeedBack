<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="personne")
 *  @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({"personne" = "Personne", "lutteur" = "Lutteur", "entraineur" = "Entraineur", "manager" = "Manager", "arbitre" = "Arbitre", "promoteur" = "Promoteur", "consultant" = "Consultant"})
 **/
class Personne
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idPersonne;
    
    /** @Column(type="string", length=50, nullable=true) **/
    private $nom;

    /** @Column(type="string", length=100, nullable=true) **/
    private $prenom;

    /** @Column(type="string", length=50, nullable=true) **/
    private $surnom;

    /** @Column(type="string", length=10, nullable=false) **/
    private $dateNaissance;

    /** @Column(type="string", length=255, nullable=false) **/
     private $adresse;

    /** @Column(type="string", length=50, nullable=false) **/
    private $ville;

    /** @Column(type="string", length=100, nullable=true) **/
    private $photo;

    /** @Column(type="text", nullable=true) **/
     private $description;

    /** @Column(type="string", length=50, nullable=false) **/
    private $metier;

    /** @Column(type="string", length=1) **/
     private $sexe;
    /** @Column(type="string", length=30, nullable=false) **/
    private $nationalite;
    
    public function __construct()
    {
        
    }
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }
    public function setIdPersonne($idPersonne)
    {
        $this->idPersonne = $idPersonne;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    
    public function getSurnom()
    {
        return $this->surnom;
    }
    public function setSurnom($surnom)
    {
        $this->surnom = $surnom;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getVille()
    {
        return $this->ville;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function getPhoto()
    {
        return $this->photo;
    }
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getMetier()
    {
        return $this->metier;
    }
    public function setMetier($metier)
    {
        $this->metier = $metier;
    }

    public function getSexe()
    {
        return $this->sexe;
    }
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function getNationalite()
    {
        return $this->nationalite;
    }
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }

    public function getCombats()
    {
        return $this->combats;
    }
    public function setCombats($combats)
    {
        $this->combats = $combats;
    }
}

?>