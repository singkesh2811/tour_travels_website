<?php
include 'connection.php';
include 'navbar.php';
?>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sign Up</title>
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
         Sign Up 
      </div>
          <form action="signupinc.php" method="post">
         <div class="form-row">
            <div class="input-data">
               <input type="text"  name= "firstname" required>
               <div class="underline"></div>
               <label for="">First Name</label>
            </div>
            <div class="input-data">
               <input type="text" name="lastname" required>
               <div class="underline"></div>
               <label for="">Last Name</label>
            </div>
         </div>
          <div class="form-row">
            <div class="input-data">
               <input type="text"  name="email" required>
               <div class="underline"></div>
               <label for="">Email</label>
            </div>
          
            <div class="input-data">
               <input type="text"  name="username" required>
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
          
            <div class="input-data">
                <input type="password"  name="passwordrepeat" required>
               <div class="underline"></div>
               <label for="">Repeat Password</label>
            </div>
          </div>
           <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" name="submit" value="submit">
               </div>
            </div>
      </form>
          
     
          <?php 
          if(isset($_GET["error"])){
              if($_GET["error"]== "emptyinput"){
                  echo "<p>Please fill all the fields!</p>";
              }
              elseif ($_GET["error"]== "invaliduid") {
                  echo "<p>Please choose a valid username</p>";
          }
          elseif($_GET["error"]== "invalidemail"){
              echo "<p>Please choose a valid email</p>";
          }
          elseif($_GET["error"]== "passwordsdontmatch"){
              echo "<p>Passwords don't match</p>";
          }
          elseif ($_GET["error"]== "usernametaken") {
              echo "<p>Username or Email Already Taken!</p>";
      }
      elseif ($_GET["error"]== "none") {
          echo "<p>You have Signed up successfully!</p>";
        }
          }
          ?>
      </div>
    </body>
   
</html>