<?php 

class Signup extends Dbh{
    private $username;
    private $pwd;

    public function __construct($username,$pwd){
        $this->username=$username;
        $this->pwd=$pwd;
    }

    private function insertUser(){
        $query= "INSERT INTO users("username","pwd")VALUES(:username,:pwd);";
        $stmt=parent::connect()->prepare($query);
//Here we are using not $this->connect()because this will refer to the method of Dbh and
//if there were any method of same name as connect()
    }
}