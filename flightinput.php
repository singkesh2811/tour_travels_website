<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Booking Form HTML Template</title>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
    />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="flightstyle.css" />

  
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
                <form  action ="flightbook.php"method ="POST">
                <div class="form-group">
                  <span class="form-label">From</span>
                        <select name ="from" class="form-control">
                        <option value="" disabled selected>Select your option</option>
                          <option >Bengaluru</option>
                          <option >Delhi</option>
                          <option >Lucknow</option>
                        </select>
                        <span class="select-arrow"></span>
                  </div>
                  <div class="form-group">
                  <span class="form-label">To</span>
                        <select  name ="to" class="form-control">
                        <option value="" disabled selected>Select your option</option>
                        <option >Bengaluru</option>
                          <option >Delhi</option>
                          <option >Lucknow</option>
                          </select>
                        <span class="select-arrow"></span>
                  </div>
                  <div id =" shift" class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <span class="form-label">Date</span>
                        <input  name ="date" class="form-control" type="date" required />
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <span class="form-label">Seats</span>
                        <select  name ="seat"class="form-control">
                          <option >1</option>
                          <option >2</option>
                          <option >3</option>
                          <option >4</option>
                          <option >5</option>
                          <option >6</option>
                          <option >7</option>
                          <option >8</option>
                          <option >9</option>
                          <option >10</option>
                          <option >11</option>
                          <option >12</option>
                          <option >13</option>
                          <option >14</option>
                          <option >15</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    
                    <br>
                  <div class="check">
                    <input    name ="submit2" class="submit-btn" type ="submit" value ="Search Flights">
                 
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  
</html>
