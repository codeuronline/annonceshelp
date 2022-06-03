<?php

namespace Database;

use PDO;

class DbConnection {
    private $dbname; //dsn (Data Source Name)
    private $host; //dsn (adresse)
    private $username;
    private $password;
    private $pdo;
                                            //Dsn
    public function __construct(string $dbname, string $host, string $username, string $password)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

 public function getPDO(): PDO {
    //Si $this->pdo est différent de null alors on le retourne (condition ternaire)
    return $this->pdo ?? $this->pdo = new PDO("mysql:dbname={$this->dbname};host={$this->host}", $this->username, $this->password, [
        //Mode d'erreur            Mode d'exception
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, //récupère un objet
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET UTF8' //pour reconnaître tous les caractères
    ]);
 }
}
