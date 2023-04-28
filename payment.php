<?php
include 'navbar.php';
require 'connection.php';

error_reporting(0);

?>
<!DOCTYPE html>
<link type="text/css" rel="stylesheet" href="payment.css" />
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');

  .span1{
  position: absolute;
  display: inline-flex;
  top :17%;
  left: 55%;
  width: 150px;
  height: 55px;
  margin: 0 15px;
  perspective: 1000px;
}
.span1 a{
  font-size: 19px;
  letter-spacing: 1px;
  transform-style: preserve-3d;
  transform: translateZ(-25px);
  transition: transform .25s;
  font-family: 'Montserrat', sans-serif;
  
}
.span1 a:before,
.span1 a:after{
  position: absolute;
  content: "PAY";
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 2px solid green;
  box-sizing: border-box;
  border-radius: 5px;
}
.span1 a:before{
  color: #fff;
  background: #16181a;
  transform: rotateY(0deg) translateZ(25px);
}
.span1 a:after{
  color: #000;
  transform: rotateX(90deg) translateZ(25px);
}
.span1 a:hover{
  transform: translateZ(-25px) rotateX(-90deg);
}

  </style>

<?php
$na=$_GET['flightname'];
$price =$_GET['price'];
$seat =$_GET['seat'];
$date =$_GET['date'];
$hna=$_GET['hotelname'];
$ra=$_GET['rate'];
$ro=$_GET['room'];
$d=$_GET['d'];
$totalhotel = $ra*$ro*$d;
$totalflight = $price * $seat;
$totalcost =$totalflight + $totalhotel;
$username = $_SESSION['username'];
$from =$_GET['from'];
$to =$_GET['to'];
    ?>
<body>
    <br><br><br><br><br>
<div class="container">
  <div class="card">
  <?php if($totalflight !=0)
      {

     ?>
     <span class="span1"><a  href="option.php?from=<?php echo($from);?> & to=<?php echo($to);?> & flightname=<?php echo($na);?> & price=<?php echo($price);?>  & seat=<?php echo($seat); ?> & date=<?php echo($date); ?>"></a></span>
    
    <?php } ?>
    <?php if($totalhotel !=0)
      {
     ?>
     <span class="span1"><a href ="yourbookings.php?username=<?php echo($username);?> & hotelname=<?php echo($hna);?> & price=<?php echo($totalhotel);?>"></a></span>
     <?php } ?>


 <label>Card number:</label>
 <input id="user" type="text" class="input cardnumber"  placeholder="1234 XXXX XXXX XXXX">
 <label>Name:</label>
 <input class="input name"  placeholder="NAME">
 <label class="toleft">CCV:<br></label>
 <input class="input toleft ccv" placeholder="***">
  </div>
  <div class="receipt">
    <div class="col"><p>Cost:</p>
    <h2 class="cost">₹<?php echo($totalcost); ?></h2><br>
    <p>Name:</p>
    <h2 class="seller"><?php echo($_SESSION['username']);?></h2>
    </div>
    <div class="col">
      <p>BOOKED:</p>
      <?php if($totalflight !=0)
      {

     ?>
      <h3 class="bought-items"><?php echo($na); ?></h3>
      <br><p class="bought-items price">₹<?php echo($totalflight); ?>&nbsp;(<?php echo($seat); ?>&nbsp; Seat/s) </p><br>
      <?php } ?>
      <?php if($totalhotel !=0)
      {

     ?>
      <h3 class="bought-items"><?php echo($hna); ?></h3><br>
      <p class="bought-items price">₹<?php echo($totalhotel); ?>&nbsp;(<?php echo($ro); ?>&nbsp; Room/s)&nbsp;(<?php echo($d); ?>&nbsp; Day/s) </p><br>
      <?php } ?>
    </div>
    <p class="comprobe">Thank you for using our site! </p>
  </div>
</div>
</body>
</html>