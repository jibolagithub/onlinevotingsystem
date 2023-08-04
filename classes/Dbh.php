<?php

class Dbh {

    private $dbname = 'voting';
    private $user = 'root';
    private $password = '';
    private $host = 'localhost';

    public function getConnection(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->user, $this->password);
        $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}