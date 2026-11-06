<?php 

class Signup extends Dbh{
    private $username;
    private $pwd;

    public function __construct($username,$pwd){
        $this->username=$username;
        $this->pwd=$pwd;
    }

    private function isEmptySubmit(){
        if(isset($this->username)&& isset($this->pwd)){
            return false;
        }else{
            return true;
        }
    }

    private function signupUser(){
        //Error handlers
        if($this->isEmptySubmit()){
            header("Location".$_SERVER['DOCUMENT_ROOT']. '/index.php' );
            die();
        }
    }

    //stmt=$this->connect()->prepare($query)

    private function insertUser(){
        $query= "INSERT INTO users('username','pwd') VALUES (:username,:pwd);";
        $stmt=parent::connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);
//Here we are using not $this->connect()because this will refer to the method of Dbh and
//if there were any method of same name as connect()

//if no error,signup user
    $this->insertUser();
    }
}