<?php 
namespace App\Models;

class Mail extends Model {

    protected $table='utilisateurs'; 
    protected $id_annonce;
    protected $mail;

   
    
    public function getiId_annonce()
    {
        return $this->id_annonce;
    }

    /**
     * Set the value of id_annonce
     *
     * @return  self
     */ 
    public function setId_annonce($id_annonce)
    {
        $this->id_annonce = $id_annonce;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

}