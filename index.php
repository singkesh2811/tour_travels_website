<?php
session_start();
require_once 'connection.php';
?>
<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<style>
body {
  background-image: url('main4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-attachment: fixed;  
  background-size: cover;
}
</style>

<style>
  .button1
{

    background-color: Transparent;
    background-repeat:no-repeat;
    overflow: hidden; 
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    display: block;
    width: 240px;
    padding: 40px;
    margin: 0 auto;
    border: none;
    cursor: pointer;
    border-radius: 2px;
    transform: translateY(-50%);
    box-shadow: 0 10px 20px -5px #94a6af;
    overflow: hidden;
}

.button1:before, button:after
{
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.button1:before
{
    transform: scale(1);
    opacity : 0.2;
    background-size: cover;
    transition: 0.3s ease transform;
    z-index: 1;
}

.button1:after
{
    background-color: #000;
    opacity: 0.16;
    z-index: 2;
}

.button1 div
{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 3;
}

.button1 div:before, button div:after
{
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    color: #fff;
    font-size: 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: bold;
    line-height: 1;
    text-align: center;
    padding: 25px 0;
    transition: 0.3s ease all;
}

.button1 div:before
{
    content: "FLIGHTS";
    letter-spacing: 0;
    opacity: 1;
    transform: scale(1);
}

.button1 div:after
{
    content: "BOOK!";
    letter-spacing: -10px;
    transform: scale(0);
    opacity: 0;
}

.button1:hover:before
{
    transform: scale(1.3);
}

.button1:hover div:before
{
    letter-spacing: 3px;
    opacity: 0;
    transform: scale(4);
}

.button1:hover div:after
{
    letter-spacing: 0;
    opacity: 1;
    transform: scale(1);
}

.button2
{
    background-color: Transparent;
    background-repeat:no-repeat;
    overflow: hidden; 
    position: absolute;
    top: 65%;
    right: 0;
    left: 0;
    display: block;
    width: 240px;
    padding: 40px;
    margin: 0 auto;
    border: 0;
    cursor: pointer;
    border-radius: 2px;
    transform: translateY(-50%);
    box-shadow: 0 10px 20px -5px #94a6af;
    overflow: hidden;
}

.button2:before, button:after
{
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.button2:before
{
    transform: scale(1);
    background-size: cover;
    transition: 0.3s ease transform;
    z-index: 1;
}

.button2:after
{
    background-color: #000;
    opacity: 0.16;
    z-index: 2;
}

.button2 div
{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 3;
}

.button2 div:before, button div:after
{
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    color: #fff;
    font-size: 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: bold;
    line-height: 1;
    text-align: center;
    padding: 25px 0;
    transition: 0.3s ease all;
}

.button2 div:before
{
    content: "HOTELS";
    letter-spacing: 0;
    opacity: 1;
    transform: scale(1);
}

.button2 div:after
{
    content: "BOOK!";
    letter-spacing: -10px;
    transform: scale(0);
    opacity: 0;
}

.button2:hover:before
{
    transform: scale(1.3);
}

.button2:hover div:before
{
    letter-spacing: 3px;
    opacity: 0;
    transform: scale(4);
}

.button2:hover div:after
{
    letter-spacing: 0;
    opacity: 1;
    transform: scale(1);
}
  </style>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
    <div >
      <br><br><br><br><br><br><br><br><br>
  <h1 style ="text-align: center;">Plan your vacation!</h1>
  <h2 style ="text-align: center;">Book flights and hotels at your fingertips!</h2>
 <?php
 if(isset($_SESSION["username"]))
 {
    echo( "<button class ='button1' onclick= \"location.href='flightinput.php'\"><div></div></button>\n");
    echo( "<button class ='button2' onclick= \"location.href='hotelinput.php'\"><div></div></button>");
 }
 else
 {
    echo( "<button class ='button1' onclick= \"location.href='login.php'\"><div></div></button>\n");
    echo( "<button class ='button2' onclick= \"location.href='login.php'\"><div></div></button>");
 }
  
  ?>




</body>
</html>