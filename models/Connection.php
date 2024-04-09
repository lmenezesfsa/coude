<?php

class Connection
{
    // private $dbname = "mysql:host=br778.hostgator.com.br:3306;dbname=manumo55_coude_bebidas";
    // private $user = "manumo55_admin";
    // private $pass = "@Premium1";

    private $dbname = "mysql:host=localhost;dbname=coude_links";
    private $user = "root";
    private $pass = "";

    public function connect(){
        try {
            $conn = new \PDO($this->dbname, $this->user, $this->pass);
            $conn->exec("set names utf8");    
            return $conn; 
        } catch (\PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}