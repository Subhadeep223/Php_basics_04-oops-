<?php 

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username=$POST["username"];
    $pwd=$POST["pwd"];

    require_once "../Dbh.php";
    require_once "../Signup.php";

    $Signup=new Signup($username,$pwd);
}