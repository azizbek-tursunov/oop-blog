<?php

class Database
{

    public function __construct(
        public $host,
        public $dbname,
        public $username,
        public $password
    ) {
        $this->connect();
    }

    public function connect() {

        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
}


