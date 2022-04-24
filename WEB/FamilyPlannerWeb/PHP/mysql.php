<?php

class DBConnecter
{
    private $dbname;
    private $dbuser;
    private $dbpwd;

    public function getDatabaseName(){
        return $this->dbname;
    }
    public function getDatabaseUser(){
        return $this->dbuser;
    }
    public function getDatabasePassword(){
        return $this->dbpwd;
    }
} 
// $conn = new DBConnecter