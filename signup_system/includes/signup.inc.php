<?php 

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username=$POST["username"];
    $pwd=$POST["pwd"];

    require_once "../Dbh.php"; //This is the parent class
    require_once "../Signup.php"; // this is the child class

    $Signup=new Signup($username,$pwd);
}