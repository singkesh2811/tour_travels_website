<?php
require_once 'connection.php';
require_once 'functioninc.php';
if(isset($_POST["submit"])){
    $username=$_POST["username"];
            $password=$_POST["password"];

            
             if(emptyInputLogin($username, $password !==false)){
        header("location: signup.php?error=emptyinput");
        exit(); 
    }
  loginUser($conn, $username, $password);  
}
else{
    header("location:login.php");
}