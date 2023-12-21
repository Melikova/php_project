<?php

class Database {
    private $host = "localhost";
    private $user_name = "learn7dr_scandiweb";
    private $pass = "scandiweb2022";
    private $db_name = "learn7dr_scandiweb";
    private $charset = "utf8mb4";

    protected function connect(){
        $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=$this->charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];

        try {
             $pdo = new PDO($dsn, $this->user_name, $this->pass, $options);
             return $pdo;
        } catch (\PDOException $e) {
             throw new \PDOException($e->getMessage(), (int)$e->getCode());
        } 
        
    }
    
}
