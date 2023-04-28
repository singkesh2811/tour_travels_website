<?php
require_once 'connection.php';
function emptyInputSignup($firstname, $lastname, $email, $username, $password, $passwordrepeat){
      $result;
      if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($passwordrepeat)){
          $result=true;
      }
      else{
          $result=false;
      }
      return false; 
      }

function invalidusername($username){
    $result=true;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result=true;
    }
    else{
    
        $result=false;
    }
    return $result;
}
function invalidemail($email){
    $result=true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $result=true;  
    }
    else{
        $result=false;
    }
    return $result;
}
function pwdmatch($password, $passwordrepeat){
    $result=true;
    if($password !== $passwordrepeat){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function usernameexists($conn, $username, $email){
    $sql="SELECT * FROM users WHERE username = ? OR email = ?; ";
$stmt= mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql))
{
      header("location: signup.php?error=stmtfailed");
      exit();
}

    mysqli_stmt_bind_param($stmt, "ss" , $username, $email);
    mysqli_stmt_execute($stmt);
    
    $resultdata= mysqli_stmt_get_result($stmt);
    if ($row=  mysqli_fetch_assoc($resultdata)){
    return $row;
        
    }
    else{
        $result=false;
        return $result;
             
    }
    mysqli_stmt_close($stmt);
    }
    
   function createUser($conn, $firstname, $lastname, $email, $username, $password){
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (firstname, lastname, email, username, password ) VALUES (?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_bind_param($stmt,"sssss",$firstname, $lastname, $email, $username,$hashedPwd);

if (mysqli_stmt_execute($stmt))
{
   mysqli_stmt_store_result($stmt);
    header("location: signup.php?error=none");
}
   }
   function emptyInputLogin($username, $password){
      $result;
      if(empty($username) || empty($password)){
          $result=true;
      }
      else{
          $result=false;
      }
      return false; 
      }
      
     function loginUser($conn, $username, $password){
         $usernameexists= usernameexists($conn, $username, $username);
         if($usernameexists == false){
             header("location:login.php?error=wrongloginid");             
             exit();
         }
         
         $hashedPwd=$usernameexists["password"];
         $adus=$usernameexists["adus"];
         $checkPwd= password_verify($password, $hashedPwd);
        
         if($checkPwd == false){
             header("location: login.php?error=wrongloginpwd");
            
         }
         else{
             if($checkPwd== true && $adus==0){
             session_start();
             $_SESSION["username"]=$usernameexists["username"];
             $_SESSION["username"]=$usernameexists["username"];
                header("location: index.php?error=none");
             }
             else{
               session_start();
             $_SESSION["username"]=$usernameexists["username"];
             $_SESSION["username"]=$usernameexists["username"];
                header("location: adminpanel.php?error=none");  
             }
         }
     }