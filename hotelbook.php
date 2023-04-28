<?php
include 'navbar.php';
require 'connection.php';
?>


<html>
<link rel="stylesheet" href="hotelbook.css">
<?php
if(isset($_POST['submit1']))
{
    $des = $_POST['place'];
    $checkin = ($_POST["checkin"]);
    $checkout = ($_POST["checkout"]);
$dateDifference = abs(strtotime($checkout) - strtotime($checkin));

$years  = floor($dateDifference / (365 * 60 * 60 * 24));
$months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
$d   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));



    $room =($_POST["rooms"]);
    $username =$_SESSION['username'];
    
     $sql3 = "INSERT INTO hotel ( username,destination,check_in , check_out,room ) VALUES ('$username','$des','$checkin','$checkout','$room')";
     $r=mysqli_query($conn,$sql3);
    }  

?>

<style>
body {
  background-image: url('bookflight.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
.button1
{

    background-color: green;
    background-repeat:no-repeat;
    overflow: hidden; 
    position: absolute;
    top: 30%;
    right: 0;
    left: 55%;
    display: block;
    height : 47px;
    width: 200px;
    padding: 40px;
    margin: 0 auto;
    border: none;
    cursor: pointer;
    border-radius: 2px;
    transform: translateY(-50%);
    
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
    content: "₹2000";
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
    background-color: green;
    background-repeat:no-repeat;
    overflow: hidden; 
    position: absolute;
    top: 75%;
    right: 0;
    left: 55%;
    display: block;
    height : 47px;
    width: 200px;
    padding: 40px;
    margin: 0 auto;
    border: none;
    cursor: pointer;
    border-radius: 2px;
    transform: translateY(-50%);
    
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
    content: "₹4000";
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
.button3
{
    background-color: green;
    background-repeat:no-repeat;
    overflow: hidden; 
    position: absolute;
    top: 125%;
    right: 0;
    left: 55%;
    display: block;
    height : 47px;
    width: 200px;
    padding: 40px;
    margin: 0 auto;
    border: none;
    cursor: pointer;
    border-radius: 2px;
    transform: translateY(-50%);
    
    overflow: hidden;
}

.button3:before, button:after
{
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.button3:before
{
    transform: scale(1);
    background-size: cover;
    transition: 0.3s ease transform;
    z-index: 1;
}

.button3:after
{
    background-color: #000;
    opacity: 0.16;
    z-index: 2;
}

.button3 div
{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 3;
}

.button3 div:before, button div:after
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

.button3 div:before
{
    content: "₹6000";
    letter-spacing: 0;
    opacity: 1;
    transform: scale(1);
}

.button3 div:after
{
    content: "BOOK!";
    letter-spacing: -10px;
    transform: scale(0);
    opacity: 0;
}

.button3:hover:before
{
    transform: scale(1.3);
}

.button3:hover div:before
{
    letter-spacing: 3px;
    opacity: 0;
    transform: scale(4);
}

.button3:hover div:after
{
    letter-spacing: 0;
    opacity: 1;
    transform: scale(1);
}

</style>
<body>
    
    <?php
    



$query= "SELECT * FROM flights WHERE  pickup = 'BENGALURU' AND destination ='LUCKNOW'"; 
    $query_run= mysqli_query($conn, $query);
$row= mysqli_fetch_array($query_run);

?>
    <div class ="div1">
        <img  src ="hotelicon3.jfif">
       
       <p class ="center"> BASIC ROOMS  </p>
       <a href='payment.php?hotelname=BASIC ROOM & rate=2000 & room=<?php echo($room); ?> & in=<?php echo($checkin); ?> & out=<?php echo($checkout); ?> & d=<?php echo($d); ?>'> <button class ="button1" ><div></div></button> </a>

        

</div>
  
  <div class ="div1">
        <img  src ="hotelicon3.jfif">
       
       <p class ="center"> DELUX HOTEL </p>
       <a href='payment.php?hotelname=DELUX ROOM & rate=4000 & room=<?php echo($room); ?> & in=<?php echo($checkin); ?> & out=<?php echo($checkout); ?> & d=<?php echo($d); ?>'> <button class ="button2" ><div></div></button> </a> 

</div>
<div class ="div1">
        <img  src ="hotelicon3.jfif">
       
       <p class ="center"> SUITE </p>
       <a href='payment.php?hotelname=SUITE & rate=6000 & room=<?php echo($room); ?> & in=<?php echo($checkin); ?> & out=<?php echo($checkout); ?> & d=<?php echo($d); ?>'> <button class ="button3" ><div></div></button> </a> 

</div>
</body>
</html>