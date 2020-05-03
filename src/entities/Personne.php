<?php


/**
 * @Entity @Table(name="personne")
 **/

class Personne
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $idPersonne;
    /** @column(type="string", length=20, nullable=true) */
    private $nom;
    /** @column(type="string", length=50, nullable=true) */
    private $prenom;
    /** @column(type="string", length=70, nullable=false) */
    private $surnom;
    /** @column(type="string", length=10, nullable=false) */
    private $dateNaissance;
    /** @column(type="string", length=50, nullable=false) */
    private $adresse;
    /** @column(type="string", length=20, nullable=false) */
    private $ville;
    /** @column(type="string") */
    private $photoPersonne;
    /** @column(type="string", length=30, nullable=true) */
    private $metierPersonne;
    /** @column(type="string", length=10, nullable=false) */
    private $sexe;
    /** @column(type="string", length=15, nullable=false) */
    private $nationalite;
    /** @column(type="text", nullable=false) */
    private $description;
        
    

    /**
     * Get the value of idPersonne
     */ 
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     * Set the value of idPersonne
     */ 
    public function setIdPersonne($idPersonne)
    {
        $this->idPersonne = $idPersonne;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get the value of surnom
     */ 
    public function getSurnom()
    {
        return $this->surnom;
    }

    /**
     * Set the value of surnom
     */ 
    public function setSurnom($surnom)
    {
        $this->surnom = $surnom;
    }

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * Get the value of photoPersonne
     */ 
    public function getPhotoPersonne()
    {
        return $this->photoPersonne;
    }

    /**
     * Set the value of photoPersonne
     */ 
    public function setPhotoPersonne($photoPersonne)
    {
        $this->photoPersonne = $photoPersonne;
    }
    
    /**
     * Get the value of metierPersonne
     */ 
    public function getMetierPersonne()
    {
        return $this->metierPersonne;
    }

    /**
     * Set the value of metierPersonne
     */ 
    public function setMetierPersonne($metierPersonne)
    {
        $this->metierPersonne = $metierPersonne;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * Get the value of nationalite
     */ 
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set the value of nationalite
     */ 
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}


?>