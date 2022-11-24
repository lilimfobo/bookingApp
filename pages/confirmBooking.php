<?php
    require "/classes/class.php";

    session_start();

    $selectedHotelId = $_GET['hotelId'];


    $selectedHotel;

    foreach ($_SESSION['hotelList'] as $hotel) {

      if ($hotel->getId() == $selectedHotelId) {
  
          $selectedHotel = $hotel;
      }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>

body{
    background-color: gray;
}

h2{
color: #fff;

}

.form-label{
  color: #fff;
}
</style>
  </head>
  <body>
    <form class="ml-3" action="booking.php" method="post">
    <h2 class="text-center">Confirm Booking</h2>

    <?php
        echo "
        <div class='col-lg-4 md-6 mb-3'>
        <div class='card border-0 shadow' style='max-width: 350px; margin: auto;''>
            <". $selectedHotel->getImg() ." class='img-responsivecard-img-top' alt='...'>
            <div class='card-body'>
                <h5>". $selectedHotel->getId() ." ". $selectedHotel->getName() ."</h5>
                <h6 class='mb-4 cost-per-night'>R". $selectedHotel->getCostPerNight() ." per night</h6>
                <div class='features mb-4'>
                  <h6 class='mb-1'>Features</h6> 
                  <span class='badge rounded-pill bg-light text-dark text-wrap'>". $selectedHotel->getAvailRooms()." Rooms
                  </span>
                </div>   
                <div class='facilities mb-4'>
                <h6 class=mb-1'>Facilities</h6> 
                  <span class='badge rounded-pill bg-light text-dark text-wrap'>
                  Gym
                  </span>
                  <span class='badge rounded-pill bg-light text-dark text-wrap'>
                  Spa
                  </span>
                  <span class='badge rounded-pill bg-light text-dark text-wrap'>
                  Wi-fi
                  </span>
                  <span class='badge rounded-pill bg-light text-dark text-wrap'>
                  Swimming Pool
                  </span>
                  <span class='badge rounded-pill bg-light text-dark text-wrap'>
                  Laundry
                  </span> 
                </div>  
                <span class='badge rounded-pill bg-light text-dark text-wrap'>Total Cost of Stay: R ". $selectedHotel->calculateCostOfStay($userNumDays) .",00 </span>         
            </div>
            </div>
            </div>";
            

    ?>


    <div class="container-fluid">
       
      <div class="row"> 
        <div class="col-md-3 mb-2">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control shadow-none" required>
        </div>
        <div class="col-md-3 mb-2">
            <label class="form-label">Last Name</label>
            <input name="lastName" type="text" class="form-control shadow-none" required>
        </div>
        <div class="col-md-3 mb-2">
            <label class="form-label">Email</label>
            <input name="email" type="email" class="form-control shadow-none" required>
        </div>
        <button name="confirm-booking" class="btn btn-primary col-md-2 mb-1">Confirm</button>
    </div>    
    </div>
</form>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>