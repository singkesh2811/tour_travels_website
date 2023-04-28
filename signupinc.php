<?php
    require_once 'connection.php';
    require_once 'functioninc.php';
if (isset($_POST["submit"])){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $passwordrepeat=$_POST["passwordrepeat"];
    
    if(emptyInputSignup($firstname, $lastname, $email, $username, $password, $passwordrepeat !==false)){
        header("location: signup.php?error=emptyinput");
        exit(); 
    }
    
     if(invalidusername($username) !== false){
        header("location: signup.php?error=invaliduserename");
        exit(); 
    }
    
     if(invalidemail($email) !== false){
        header("location: signup.php?error=invalidemail");
        exit(); 
    }
    
     if(pwdmatch($password, $passwordrepeat) !== false){
        header("location: signup.php?error=passwordsdontmatch");
        exit(); 
    }
    
     if(usernameexists($conn, $username, $email) !== false){
        header("location: signup.php?error=usernametaken");
     exit(); 
     
     }
    
 createUser($conn, $firstname, $lastname, $email, $username, $password);
}
else{
    header("location:signup.php");
}