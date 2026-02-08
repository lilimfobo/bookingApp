<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quick Bookings | Travel Made Easy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body>
    <header class="container text-center my-5 py-3">
        <h1 class="display-3 fw-bold">Quick Bookings</h1>
        <h4 class="fw-light opacity-75">Compare trip prices easier!</h4>
    </header>

    <main class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-lg p-4 border-0">
                    <form name="hotel" method="post" autocomplete="off" action="pages/hotels.php">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="inDate" class="form-label fw-bold text-dark">Check-in</label>
                                <input class="form-control" type="date" name="inDate" id="inDate" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="outDate" class="form-label fw-bold text-dark">Check-out</label>
                                <input class="form-control" type="date" name="outDate" id="outDate" required>
                            </div>
                        </div>
                        <div class="d-grid mt-2">
                            <button class="btn btn-success btn-lg fw-bold" type="submit" name="CompareRates">
                                Compare rates
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="images/bayworld.jpg" class="card-img-top" alt="bayworld" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column text-dark">
                        <h5 class="card-title fw-bold">Bayworld Oceanarium</h5>
                        <p class="card-text small text-muted">Comprised of the Main Museum, Oceanarium, and Snake Park—marvel at the diversity of displays.</p>
                        <a href="https://www.bayworld.co.za/" target="_blank" class="btn btn-outline-primary mt-auto">More Info</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="images/addo.webp" class="card-img-top" alt="elephants" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column text-dark">
                        <h5 class="card-title fw-bold">Addo Elephant Park</h5>
                        <p class="card-text small text-muted">The third largest national park, expanded to conserve a range of biodiversity and landscapes.</p>
                        <a href="https://www.sanparks.org/parks/addo/" target="_blank" class="btn btn-outline-primary mt-auto">More Info</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-dark">
                    <img src="images/wackyWaterpark.jpg" class="card-img-top" alt="water park games" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column text-dark">
                        <h5 class="card-title fw-bold">Wacky Water Park</h5>
                        <p class="card-text small text-muted">Family destination for fun in the sun. Offers activities for young and old in one location.</p>
                        <a href="https://www.wackywaterpark.com/" target="_blank" class="btn btn-outline-primary mt-auto">More Info</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <h5 class="mb-3">Follow Us</h5>
                    <div class="d-flex justify-content-center">
                        <a href="https://www.twitter.com/" target="_blank"><img src="images/twitter.png" id="logo" alt="Twitter"></a>
                        <a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.png" id="logo" alt="Facebook"></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="footer-email-form text-center text-md-start">
                        <h5 class="mb-3">Join our newsletter</h5>
                        <div class="row g-2 justify-content-center justify-content-md-start">
                            <div class="col-sm-8 col-md-7">
                                <input type="email" class="form-control" placeholder="Enter your email address" id="footer-email">
                            </div>
                            <div class="col-sm-4 col-md-5">
                                <button type="submit" id="footer-email-btn">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 opacity-50">
                <small>&copy; 2026 Quick Bookings. All rights reserved.</small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>