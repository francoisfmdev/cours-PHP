<?php
namespace Database;

use PDO;

class DBConnection{
    
    private $dbname;
    private $host;
    private $username;
    private $password;
    private $pdo;

    public function __construct(String $dbname,String $host, String $username,String $password)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function get_pdo() :PDO
    {
        if($this->pdo === null ){
         $this->pdo = new PDO("mysql:dbname={$this->dbname};
            host={$this->host};",$this->username,$this->password,array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ 
              ));
        }
        return $this->pdo;
    }
    
}