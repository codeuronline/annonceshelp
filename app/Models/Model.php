<?php 

namespace App\Models;

use Database\DbConnection;
use stdClass;

//Classe qui ne sera jamais instensiée 
abstract class Model{
 protected $db;
 protected $table;


 public function __construct(DbConnection $db)
 {
     $this->db = $db;
 }

 public function findAll() : array{

    $sql= $this->db->getPDO()->query("SELECT * FROM {$this->table} ORDER BY nom DESC");
    return $sql->fetchAll(); 

 }

 public function findById(int $id) :stdClass //Classe standard prédéfinie
 {

    $sql= $this->db->getPDO()->prepare("SELECT * FROM {$this->table} WHERE id=?");
    $sql-> execute([$id]);
    return $sql ->fetch(); 

 }

 public function delete($id)
 {
   $sth = $this->db->getPDO()->prepare("DELETE FROM {$this->table} WHERE Id=$id");
   $sth->execute();

 }

 public function insert(Model $data)
 {
   $keys=[];
     $champs=[];
     $values=[];
     
   foreach ($data as $key => $value) {
     if($value != null && $key!= 'table' && $key!='db') {
     $keys[] = $key;
     $champs[] = '?';
     $values[] = $value;
   }
 }
   $keys = implode(",", $keys);
   $champs = implode(",", $champs);
   $sth = $this->db->getPDO()->prepare("INSERT INTO {$this->table} ($keys) VALUES ($champs)");
   $sth->execute($values);
   $result=$this->db->getPDO()->lastInsertId();
   return $result;
   
  
 }

 public function update($id, Model $data){
   $keys=[];
   $values=[];
   
 foreach ($data as $key => $value) {
   if($value != null && $key!= 'table' && $key!='db') {
   $keys[] = "$key = ?";
   $values[] = $value;
 }
}
 $values[]=$id;
 $keys = implode(",", $keys);
 $sth = $this->db->getPDO()->prepare("UPDATE $this->table SET $keys WHERE id = ?");
 $sth->execute($values);
}

 public function recherche($recherche){
   $sql="SELECT * FROM {$this->table} WHERE categorie LIKE '%$recherche%'";
 $sth=$this->db->getPDO()->prepare($sql);
  $sth-> execute();
 $resultat=$sth->fetchall();

  return $resultat; 
 }

 
}
