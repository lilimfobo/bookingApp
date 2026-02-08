<?php
require_once "../classes/class.php";
session_start();

if (!isset($_SESSION['selectedHotel'])) {
    header("Location: ../index.php");
    exit;
}

$hotel = $_SESSION['selectedHotel'];
$inDate = $_SESSION['inDate'] ?? 'N/A';
$outDate = $_SESSION['outDate'] ?? 'N/A';
$days = $_SESSION['userNumDays'] ?? 1;
$totalCost = $hotel->calculateCostOfStay($days);

// unset($_SESSION['selectedHotel']); 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Successful | Quick Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .success-check {
            font-size: 5rem;
            color: #198754;
        }
        .receipt-card {
            border-top: 5px solid #C36A2D;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            
            <div class="success-check mb-3">
                <i class="bi bi-check-circle-fill">✓</i>
            </div>
            
            <h1 class="display-5 fw-bold mb-3">Booking Confirmed!</h1>
            <p class="lead text-muted mb-5">Thank you for choosing Quick Bookings. Your reservation details have been saved.</p>

            <div class="card shadow-sm receipt-card text-start mb-4">
                <div class="card-body p-4">
                    <h5 class="card-title fw-bold mb-4 border-bottom pb-2">Reservation Summary</h5>
                    
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Hotel:</div>
                        <div class="col-6 fw-bold"><?php echo $hotel->getName(); ?></div>
                    </div>
                    
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Check-in:</div>
                        <div class="col-6"><?php echo $inDate; ?></div>
                    </div>
                    
                    <div class="row mb-2">
                        <div class="col-6 text-muted">Check-out:</div>
                        <div class="col-6"><?php echo $outDate; ?></div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-6 text-muted">Duration:</div>
                        <div class="col-6"><?php echo $days; ?> Night(s)</div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded">
                        <span class="fw-bold">Total Paid:</span>
                        <span class="h4 mb-0 text-success fw-bold">R <?php echo number_format($totalCost, 2); ?></span>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="../index.php" class="btn btn-primary btn-lg px-4 gap-3">Make Another Booking</a>
                <button onclick="window.print()" class="btn btn-outline-secondary btn-lg px-4">Print Receipt</button>
            </div>

            <p class="mt-5 text-muted small">A copy of this confirmation has been saved to our records.</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>