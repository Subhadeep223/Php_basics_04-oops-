<?php 

class Dbh{
    private $host="localhost";
    private $dbName="myFirstDb";
    private $dbUserName="root";
    private $dbPassword="";
    
    protected function connect(){
        try{
            $pdo=new PDO("mysql:host=".$this->host.";dbname= ".$this->dbName,
            $this->dbUserName, $this->dbPassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;    
        }catch(PDOException $e){
            die("Connection failed". $e->getMessage());
        }
    }
}