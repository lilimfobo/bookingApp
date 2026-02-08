<?php
require_once "../classes/class.php";
session_start();

// 1. Process Form Data from Index
if (isset($_POST['CompareRates'])) {
    $inDate = $_POST['inDate'];
    $outDate = $_POST['outDate'];

    // Use our modern static method from the Hotel class
    $userNumDays = Hotel::calculateNumDays($inDate, $outDate);

    // Save to session for use across pages
    $_SESSION['inDate'] = $inDate;
    $_SESSION['outDate'] = $outDate;
    $_SESSION['userNumDays'] = $userNumDays;
} else {
    // If someone accesses this page directly without dates, use a default
    $userNumDays = $_SESSION['userNumDays'] ?? 1;
}

// 2. Define Hotel Data (Ideally, this would eventually move to a Database)
// Note: We only store the filename in the object, not the full <img> tag.
$_SESSION['hotelList'] = [
    new Hotel(1, "Addo Park Vista", 1860, 3, false, "addoParkVista.jpg"),
    new Hotel(2, "Africanos Country Estate", 650, 8, false, "africanosCountryEstate.jpg"),
    new Hotel(3, "Boardwalk Hotel", 820, 11, false, "boardwalkHotel.jpg"),
    new Hotel(4, "Elephant House", 1260, 0, true, "elephantHouse.jpg"),
    new Hotel(5, "Intle Boutique Hotel", 950, 8, false, "intleBoutiqueHotel.jpg"),
    new Hotel(6, "Kelway Hotel", 820, 11, false, "kelwayHotel.jpg"),
    new Hotel(7, "Paxton Hotel", 2635, 18, false, "paxtonHotel.jpg"),
    new Hotel(8, "Surf Lodge", 2245, 7, false, "surfLodge.jpg"),
    new Hotel(9, "The Beach Hotel", 2517, 20, false, "theBeachHotel.jpg"),
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Available Hotels | Port Elizabeth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #C36A2D; }
        .h-font { color: #fff; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); }
        .hotel-card img { height: 200px; object-fit: cover; }
        .card { transition: transform 0.2s; }
        .card:hover { transform: translateY(-5px); }
    </style>
</head>
<body>

<div class="container py-5">
    <h1 class="text-center fw-bold h-font mb-5">Find Your Perfect Stay</h1>

    <div class="row g-4">
        <?php foreach ($_SESSION['hotelList'] as $hotel): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100 hotel-card">
                    <img src="../images/<?php echo $hotel->getImg(); ?>" class="card-img-top" alt="<?php echo $hotel->getName(); ?>">
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold"><?php echo $hotel->getName(); ?></h5>
                        <p class="text-muted small">Available Rooms: <?php echo $hotel->getAvailRooms(); ?></p>
                        
                        <div class="mb-3">
                            <span class="text-primary fw-bold h5">R <?php echo number_format($hotel->getCostPerNight(), 2); ?></span>
                            <span class="text-muted">/ night</span>
                        </div>

                        <div class="mb-3">
                            <h6 class="small fw-bold">Facilities:</h6>
                            <div class="d-flex flex-wrap gap-1">
                                <span class="badge bg-light text-dark border">Wi-Fi</span>
                                <span class="badge bg-light text-dark border">Pool</span>
                                <span class="badge bg-light text-dark border">Gym</span>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <div class="bg-light p-2 rounded mb-3 text-center">
                                <small class="text-muted d-block">Total for <?php echo $userNumDays; ?> days:</small>
                                <strong class="text-success">R <?php echo number_format($hotel->calculateCostOfStay($userNumDays), 2); ?></strong>
                            </div>
                            
                            <form action="confirmBooking.php" method="get">
                                <input type="hidden" name="hotelId" value="<?php echo $hotel->getId(); ?>">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-dark w-100 fw-bold">Select Hotel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-5">
        <a href="../index.php" class="btn btn-outline-light px-5">Change Dates</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>