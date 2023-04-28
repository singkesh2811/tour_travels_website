<?php
include 'navbar.php';
?>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Log In</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
body {
  background-image: url('main4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
   
   <body>
      <script src="https://kit.fontawesome.com/25225540e7.js" crossorigin="anonymous"></script> 


        
      <div class="containery">
      <div class="texty">
         LOG IN 
      </div>
      <form   action="logininc.php" method="POST">
         <div class="form-row">
            <div class="input-data">
               <input type="text"  name= "username" required>
               <div class="underline"></div>
               <label for="">Username</label>
            </div>
           
         </div>
          <div class="form-row">
            <div class="input-data">
                <input type="password"  name="password" required>
               <div class="underline"></div>
               <label for="">Password</label>
            </div>
          </div>
          
               <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" name="submit" value="login">
               </div>
            </div>
<?php 
          if(isset($_GET["error"])){
              if($_GET["error"]== "emptyinput"){
                  echo "<p>Fill all the fields!</p>";
                
              }
              elseif ($_GET["error"]== "wrongloginid") {
                  echo "<p>Incorrect Username</p>";
          }
          elseif ($_GET["error"]== "wrongloginpwd") {
                  echo "<p>Incorrect Password</p>";
              
          }
           elseif ($_GET["error"]== "none") {
                  echo "<p>Successfully loggedin</p>";
          }
   
          }
?>
          
                  </form>
      </div>
   
   </body>
</html>