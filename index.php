<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1 class="text-center my-4 py-4">Joburg Hotel Bookings</h1>

    <h4 class="text-center">Find your next stay at an affordable rate.</h4>
    <div class="w-50 m-auto">


  

     <form name="hotel" method="post" autocomplete="off" action="./pages/jhbhotels.php">
            <label for="inDate" type="date" id="inDate">Check-in</label>
            <input class="form-control" type="date" name="inDate" id="title" id="title" Required placeholder="Add check-in date">
            <label for="outDate" type="date" id="outDate">Check-out</label>
            <input class="form-control" type="date" name="outDate" id="title" id="title" Required placeholder="Add check-out date">
            <br>
            <button class="btn btn-success" type="submit" name="CompareRates">Compare rates</button>
      </form>
      <br>
    </div>
    <div class="container-fluid">
    <div class="card-group w-50 m-auto">
  <div class="card">  
    <img src="./img/goldreef.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Goldreef City</h5>
      <p class="card-text">Old gold mine turned into South Africa's best theme park.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
      <a href="https://www.goldreefcity.co.za/theme-park/" target="_blank" class="btn btn-primary">More Info</a>
    </div>
  </div>
  <div class="card">
    <img src="./img/soweto.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Soweto</h5>
      <p class="card-text">5 reasons you should visit Soweto.</p>
      <p class="card-text"><small class="text-muted">Last updated 1 month ago</small></p>
      <a href="https://www.thesouthafrican.com/news/five-reasons-visit-soweto/" target="_blank" class="btn btn-primary">More Info</a>
    </div>
  </div>
  <div class="card">
    <img src="./img/cradle.jfif" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cradle of humankind</h5>
      <p class="card-text">A whole new world to discover and the origins of mankind.</p>
      <p class="card-text"><small class="text-muted">Last updated 2 months ago</small></p>
      <a href="https://www.maropeng.co.za/content/page/introduction-to-your-visit-to-the-cradle-of-humankind-world-heritage-site" target="_blank" class="btn btn-primary">More Info</a>
    </div>
  </div>
</div>
</div>
<div class="footer text-center">
<div class="container">
  <h5>Social Media</h5>
  <a href="https://www.instagram.com/" target="_blank">Instagram</a>
  <a href="https://www.twitter.com/" target="_blank">Twitter</a>
  <a href="https://www.linkedin.com/" target="_blank">LinkedIn</a>
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