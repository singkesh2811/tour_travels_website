<?php
session_start();
error_reporting(0);
require_once 'connection.php';
$username =$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BookMyTrip</title>
  <link rel="stylesheet" href="navstyle.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="index.php">BookMyTrip</a></div>
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          
          
          <?php
           if(isset($_SESSION["username"]))
           {
             echo "<li><a href='yourbookings.php?username=$username'>Your Bookings</a></li>";
             echo "<li><a href='#'>Hi, $_SESSION[username]</a></li>";
             echo '<li><a href="logout.php">Logout</a></li>';
           }
           else{

            echo '<li><a href="signup.php">Signup</a></li>';
            echo '<li><a href="login.php">Login</a></li>';

           }
           
         
          ?>
        </ul>
      </div>
    </nav>
  </div>

  

</body>
</html>
