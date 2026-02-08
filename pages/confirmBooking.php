<?php
require_once "../classes/class.php";
session_start();

$selectedHotelId = $_GET['hotelId'] ?? null;
if (!$selectedHotelId || !isset($_SESSION['hotelList'])) {
    header("Location: ../index.php");
    exit;
}

$selectedHotel = null;
foreach ($_SESSION['hotelList'] as $hotel) {
    if ($hotel->getId() == $selectedHotelId) {
        $selectedHotel = $hotel;
        $_SESSION['selectedHotel'] = $hotel; 
        break;
    }
}

$userNumDays = $_SESSION['userNumDays'] ?? 1;

if (!$selectedHotel) {
    die("Hotel not found. Please go back and try again.");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirm Your Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #C36A2D; color: #F4F4F4; }
        .card { color: #333; }
        .form-label { font-weight: bold; }
        .booking-card img { height: 200px; object-fit: cover; }
    </style>
</head>
<body>

<div class="container py-5">
    <h2 class="text-center mb-4">Confirm Your Selection</h2>

    <form action="booking.php" method="post">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 mb-4">
                <div class="card border-0 shadow-lg booking-card">
                    <img src="../images/<?php echo $selectedHotel->getImg(); ?>" class="card-img-top" alt="Hotel Image">
                    
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="mb-0"><?php echo $selectedHotel->getName(); ?></h4>
                            <span class="badge bg-primary">ID: <?php echo $selectedHotel->getId(); ?></span>
                        </div>
                        
                        <h6 class="text-muted mb-4">R <?php echo number_format($selectedHotel->getCostPerNight(), 2); ?> per night</h6>
                        
                        <div class="mb-4">
                            <h6 class="fw-bold">Stay Details</h6>
                            <p class="mb-1">Duration: <strong><?php echo $userNumDays; ?> Days</strong></p>
                            <p class="mb-1 text-success fw-bold h5">
                                Total: R <?php echo number_format($selectedHotel->calculateCostOfStay($userNumDays), 2); ?>
                            </p>
                        </div>

                        <div class="facilities">
                            <h6 class="fw-bold">Included Facilities</h6>
                            <div class="d-flex flex-wrap gap-1">
                                <span class="badge rounded-pill bg-light text-dark border">Gym</span>
                                <span class="badge rounded-pill bg-light text-dark border">Spa</span>
                                <span class="badge rounded-pill bg-light text-dark border">Wi-fi</span>
                                <span class="badge rounded-pill bg-light text-dark border">Pool</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8">
                <div class="bg-dark bg-opacity-25 p-4 rounded shadow-sm">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label">First Name</label>
                            <input name="name" type="text" class="form-control" placeholder="John" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Last Name</label>
                            <input name="lastName" type="text" class="form-control" placeholder="Doe" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Email Address</label>
                            <input name="email" type="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                        <div class="col-12 text-center mt-4">
                            <button name="confirmBooking" type="submit" class="btn btn-primary btn-lg px-5">Confirm & Reserve</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>