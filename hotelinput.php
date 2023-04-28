<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
  <style>
    .check{
  overflow: hidden;
  height: 100px!important;
  width: 65%!important;
}
.check{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  transition: all 0.4s;
}
.check{
  left: 0;
}
.check{
  background: none;
  border: none;
  color: #fff;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
  position: relative;
  z-index: 2;
}
    </style>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form HTML Template</title>

    <!-- Google font -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
    />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="hotelstyle.css" />

  </head>

  <body>
    <div id="booking" class="section">
      <div class="section-center">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-md-push-5">
              <div class="booking-cta">
                <h1>Make your reservation</h1>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
                  facere, soluta magnam consectetur molestias itaque ad sint
                  fugit architecto incidunt iste culpa perspiciatis possimus
                  voluptates aliquid consequuntur cumque quasi. Perspiciatis.
                </p>
              </div>
            </div>
            <div class="col-md-4 col-md-pull-7">
              <div class="booking-form">
                <form method ="POST" action ="hotelbook.php">
                  <div class="form-group">
                  <span class="form-label">Your Destination</span>
                        <select  name ="place"class="form-control">
                        <option value="" disabled selected>Select your option</option>
                        <option >Bengaluru</option>
                          <option>Delhi</option>
                          <option >Lucknow</option>
                          </select>
                        <span class="select-arrow"></span>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Check In</span>
                        <input  name ="checkin" class="form-control" type="date" required />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Check out</span>
                        <input  name ="checkout" class="form-control" type="date" required />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <span class="form-label">Rooms</span>
                        <select  name ="rooms"class="form-control">
                          <option >1</option>
                          <option >2</option>
                          <option >3</option>
                          <option >4</option>
                          <option >5</option>
                          <option >6</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <br>
                  <div class="check">
                  <input   class="submit-btn" name ="submit1"type ="submit" value ="submit"> </a>
                    
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
