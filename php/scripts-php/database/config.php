<?php

class DB {
    private $HOST = 'http://wagnerweinert.com.br/phpmyadmin/';
    private $USER = 'tads24_mariano';
    private $PASSWORD = 'tads24_mariano';
    private $DB = "tads24_mariano";
    private $PORT = 3306;
    private $CHARSET = "utf8mb4";
    private $conn;

    public function getConnection() {
        $this->conn = new PDO("mysql:host=$this->HOST;dbname=$this->DB;charset=$this->CHARSET;port=$this->PORT", $this->USER, $this->PASSWORD);
        return $this->conn;
    }
}

?>