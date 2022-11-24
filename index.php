<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1 class="text-center my-4 py-4">Quick Bookings</h1>

    <h4 class="text-center">Compare trip prices easier!</h4>
    <div class="w-50 m-auto">


  

     <form name="hotel" method="post" autocomplete="off" action="./pages/hotels.php">
            <label for="inDate" type="date" id="inDate">Check-in</label>
            <input class="form-control" type="date" name="inDate" id="title" id="title" Required placeholder="Check-in date">
            <label for="outDate" type="date" id="outDate">Check-out</label>
            <input class="form-control" type="date" name="outDate" id="title" id="title" Required placeholder="Check-out date">
            <br>
            <button class="btn btn-success" type="submit" name="CompareRates">Compare rates</button>
      </form>
      <br>
    </div>
    <div class="container-fluid">
    <div class="card-group w-50 m-auto">
  <div class="card">  
    <img src="/images/bayworld.jpg" class="card-img-top" alt="bayworld">
    <div class="card-body">
      <h5 class="card-title">Bayworld Oceanarium</h5>
      <p class="card-text">Compromised of the Main Museum, Oceanarium, Snakepark - marvel at the diversity of displays & shows</p>
      <a href="https://www.bayworld.co.za/" target="_blank" class="btn btn-primary">More Info</a>
    </div>
  </div>
  <div class="card">
    <img src="/images/addo.webp" class="card-img-top" alt="elephants">
    <div class="card-body">
      <h5 class="card-title">Addo Elephant Park</h5>
      <p class="card-text">the third largest national park, it has expanded to conserve a range of biodiversity, landscapes, fauna and flora.</p>
      <a href="https://www.sanparks.org/parks/addo/" target="_blank" class="btn btn-primary">More Info</a>
    </div>
  </div>
  <div class="card">
    <img src="/images/wackyWaterpark.jpg" class="card-img-top" alt="water park games">
    <div class="card-body">
      <h5 class="card-title">Wacky Water Park</h5>
      <p class="card-text">Family destination for fun in the sun. Offers activities for young and old in one location</p>
      <a href="https://www.wackywaterpark.com/" target="_blank" class="btn btn-primary">More Info</a>
    </div>
  </div>
</div>
</div>
<div class="footer text-center">
<div class="container">
  <h5>Social Media</h5>
  <a href="https://www.twitter.com/" target="_blank">
  <img src="/images/twitter.png" id="logo">
  </a>
  <a href="https://www.facebook.com/" target="_blank">
    <img src="/images/facebook.png" id="logo">
  </a>
</div>
<div class="container footer-email-form">
  <h5>Join our newsletter</h5>
  <input type="email" placeholder="Enter your email address" id="footer-email">
  <input type="submit" value="Sign Up" id="footer-email-btn">
</div>
<div class="container">
 </div> 
</div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>


</html>