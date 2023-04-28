<?php
include 'navbar.php';
include 'connection.php';
$username =$_GET['username'];
$hotelname =$_GET['hotelname'];
$hotelprice=$_GET['price'];
$query ="SELECT * FROM flightbooking WHERE flightbooking.username ='$username'";
$run =mysqli_query($conn,$query);
$number =mysqli_num_rows($run);
echo "<br>";echo "<br>";echo "<br>";
?>
<style>
body {
  background-image: url('https://wallpaperaccess.com/full/119628.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-attachment: fixed;  
  background-size: cover;
}
.center {
  text-align: center;
}
</style>
<html> 
    
    <body>
<div class ="center">
    <h1>YOUR BOOKINGS</h1><br>
    <h2>FLIGHT:</h2>
   
    
<?php
if($number!=0)
{
    
    while($row =mysqli_fetch_array($run))
    {
        $seat =$row['seat'];
    $p =$row['price'];
    $total =$seat*$p;
        echo "<br>";
        echo "FROM: ".$row['pickup']."   TO: ";
        echo $row['destination']."   <br>";
        echo "FLIGHT NAME: ".$row['flightname']."   <br>";
        echo "SEATS: ".$row['seat']."   <br>";
        echo "DATE: ".$row['flightdate']."   <br>";    
    }
    echo("TICKET: ".$total."<br>");
}
else
echo("You dont have any bookings!!");

?>
<br>
<br>
<h2>HOTEL:</h2>
<?php
$q="SELECT * FROM hotel WHERE hotel.username ='$username' ";
$r=mysqli_query($conn,$q);
$num =mysqli_num_rows($r);
if($num!=0)
{
    echo("HOTEL NAME: ".$hotelname."  <br>");
    echo("BILL: ".$hotelprice."<br>");
    while($ro =mysqli_fetch_array($r))
    {
        echo "CITY: ".$ro['destination']."  <br>";
        echo "CHECK IN DATE: ".$ro['check_in']."  <br>";
        echo "CHECK OUT DATE: ".$ro['check_out']."  <br>";
        echo "ROOMS: ".$ro['room']."  <br>";      
    }
}
else
echo("You dont have any bookings!!");


?>
</div>
</body>
</html>