<?php

    require "/classes/class.php";

    session_start();

    if (isset($_POST['CompareRates'])) {

      $inDate = $_POST['inDate'];
      $outDate = $_POST['outDate'];

      $userNumDays = Hotel::calculateNumDays($inDate, $outDate);

      // saving user data to SESSION superglobal
      $_SESSION['numDays'] = [
          'inDate' => $inDate,
          'outDate' => $outDate,
          'userNumDays' => $userNumDays,
      ];
  }

  $_SESSION['hotelList'] = [
        
    new Hotel(1 ,"Addo Park Vista",  1860, 3, false,"img src='/images/addoParkVista.jpg'"),
    new Hotel(2, "Africanos Country Estate",  650, 8, false, "img src='/images/africanosCountryEstate.jpg'"),
    new Hotel(3, "Boardwalk Hotel",  820, 11, false,"img src='/images/boardwalkHotel.jpg'"),
    new Hotel(4, "Elephant House",  1260, 0, true,"img src='/images/elephantHouse.jpg'"),
    new Hotel(5, "Intle Boutique Hotel",  950, 8, false,"img src='/images/intleBoutiqueHotel.jpg'"),
    new Hotel(6, "Kelway Hotel",  820, 11, false, "img src='/images/kelwayHotel.jpg'"),
    new Hotel(7, "Paxton Hotel",  2635, 18, false, "img src='/images/paxtonHotel.jpg'"),
    new Hotel(8, "Surf Lodge",  2245, 7, false, "img src='/images/surfLodge.jpg'"),
    new Hotel(9, "The Beach Hotel",  2517, 20, false, "img src='/images/theBeachHotel.jpg'"),
];


?>    

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Port Elizabeth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>

      body{
          background-color: #C36A2D;
      }

      h1{
    color: #fff;

}
    </style>
  </head>
  <body>

  <h1 class='mt-5 pt-4 mb-4 text-center fw-bold h-font'>Quick Bookings</h1>

  <div class='container'>
  <div class='row'>

  
  <?php
      
        foreach ($_SESSION['hotelList'] as $hotel) {
            echo "
          
            
                <div class='col-lg-4 md-6 mb-3'>
                <form action='confirmBooking.php' method='get'>
                <div class='card border-0 shadow' style='max-width: 350px; margin: auto;''>
                    <". $hotel->getImg()." class='img-responsivecard-img-top' alt='...'>
                    <div class='card-body'>
                        <h5>".$hotel->getId() ." ". $hotel->getName() ." </h5>
                        <h6 class='mb-4 cost-per-night'>R ". $hotel->getCostPerNight() ." per night</h6>
                        <div class='features mb-4'>
                          <h6 class='mb-1'>Features</h6> 
                          <span class='badge rounded-pill bg-light text-dark text-wrap'>
                            ".$hotel->getAvailRooms()." Rooms
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
                        <span class='badge rounded-pill bg-light text-dark text-wrap' name='hotelCostofStay'>Total Cost of Stay: R ". $hotel->calculateCostOfStay($userNumDays) .",00 </span>       
                        <div class='d-flex:justify-content-evenly mb-2'>
                          <input type='text' name='hotelId' value=".$hotel->getId() ." hidden>
                          <button type='submit' name='book' class='btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none'>Book Now</button>
                          <input type='text' name='hotelId' value=".$hotel->getId() ." hidden>
                          <button type='submit' name='detail' class='btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none'>More details</button>
                          <form>
                        </div>   
                    </div>
                    </div>
                    
                    </div>
                    ";
        }
        ?>
        <div>
        </div>

  
            <div class="col-lg-12 text-center mt-5">
                <a href="/index.php" class="btn btn-primary">Back</a>    
            </div>    
        </div>    
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>