<?php 
namespace App\Models;

class Annonce extends Model {

    protected $table='annonces'; 
    protected $categorie;
    protected $nom;
    protected $description;
    protected $prix;
    protected $ville;
    protected $photo1;
    protected $photo2;
    protected $photo3;
    protected $photo4;
    protected $photo5;
   
    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
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
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
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

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
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
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of photo5
     */ 
    public function getPhoto5()
    {
        return $this->photo5;
    }

    /**
     * Set the value of photo5
     *
     * @return  self
     */ 
    public function setPhoto5($photo5)
    {
        $this->photo5 = $photo5;

        return $this;
    }

    /**
     * Get the value of photo4
     */ 
    public function getPhoto4()
    {
        return $this->photo4;
    }

    /**
     * Set the value of photo4
     *
     * @return  self
     */ 
    public function setPhoto4($photo4)
    {
        $this->photo4 = $photo4;

        return $this;
    }

    /**
     * Get the value of photo3
     */ 
    public function getPhoto3()
    {
        return $this->photo3;
    }

    /**
     * Set the value of photo3
     *
     * @return  self
     */ 
    public function setPhoto3($photo3)
    {
        $this->photo3 = $photo3;

        return $this;
    }

    /**
     * Get the value of photo2
     */ 
    public function getPhoto2()
    {
        return $this->photo2;
    }

    /**
     * Set the value of photo2
     *
     * @return  self
     */ 
    public function setPhoto2($photo2)
    {
        $this->photo2 = $photo2;

        return $this;
    }

    /**
     * Get the value of photo1
     */ 
    public function getPhoto1()
    {
        return $this->photo1;
    }

    /**
     * Set the value of photo1
     *
     * @return  self
     */ 
    public function setPhoto1($photo1)
    {
        //error_log("setter photo 1 : ".$photo1);
        $this->photo1 = $photo1;

        return $this;
    }
}

?>