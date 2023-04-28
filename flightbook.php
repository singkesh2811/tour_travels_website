<?php
include 'navbar.php';
require 'connection.php';
?>


<html>
<link rel="stylesheet" href="flightbook.css">
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
    top: 36%;
    right: 0;
    left: 0;
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
    content: "₹5000";
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
    top: 80%;
    right: 0;
    left: 0;
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

</style>
<body>
    
    <?php
    if(isset($_POST['submit2']))
    {
        $from = $_POST['from'];
        $to = $_POST['to'];
        $seat =$_POST['seat'];
        $date =$_POST['date'];
    }  
         
    
$query= "SELECT * FROM flights WHERE  pickup = '$from' AND destination ='$to'"; 
    $query_run= mysqli_query($conn, $query);
$row= mysqli_fetch_array($query_run);

?>
    <div class ="div1">
        <img  src ="flighticon3.jpeg">
       
       <p class ="center"> <?php echo($row['flightname1']); ?></p>
       <p  class ="subheading">&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp; <?php echo($row['pickup']); ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo($row['destination']);?></p>
       <p class ="time">&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;10:00 AM&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;12:00PM</p>
       <a href='payment.php?from=<?php echo($from);?> & to=<?php echo($to);?> & flightname=VISTARA AIRLINES & price=5000 & seat=<?php echo($seat); ?> & date=<?php echo($date); ?>'> <button class ="button1" ><div></div></button> </a>

        

</div>
  
  <div class ="div1">
        <img  src ="flighticon3.jpeg">
       
       <p class ="center"> <?php echo($row['flightname2']); ?></p>
       <p  class ="subheading">&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp; <?php echo($row['pickup']); ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo($row['destination']);?></p>
       <p class ="time">&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;01:00 PM&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;03:00PM</p>
       <a href="payment.php?from=<?php echo($from);?> & to=<?php echo($to);?> & flightname=INDIGO AIRLINES & price=4000  & seat=<?php echo($seat); ?> & date=<?php echo($date); ?>"><button class ="button2" ><div></div></button></a>

</div>
</body>
</html>