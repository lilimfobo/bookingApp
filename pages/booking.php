<?php
require_once "../classes/class.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmBooking'])) {

    $name    = $_POST['name'] ?? 'Unknown';
    $surname = $_POST['lastName'] ?? 'Unknown';
    $email   = $_POST['email'] ?? 'Unknown';

    $selectedHotel = $_SESSION['selectedHotel'] ?? null;
    $inDate        = $_SESSION['inDate'] ?? 'N/A';
    $outDate       = $_SESSION['outDate'] ?? 'N/A';

    if ($selectedHotel instanceof Hotel) {
        
        $filename = "bookings.csv";
        $filePath = __DIR__ . "/../data/" . $filename;

        $row = [
            $name, 
            $surname, 
            $email, 
            $selectedHotel->getId(), 
            $selectedHotel->getName(), 
            $inDate, 
            $outDate, 
            $selectedHotel->getCostPerNight()
        ];

        $fileExist = file_exists($filePath);
        $fh = fopen($filePath, "a");

        if (!$fileExist) {
            fputcsv($fh, ["Name", "Surname", "Email", "Hotel ID", "Hotel Name", "Check-in", "Check-out", "Rate"]);
        }

        fputcsv($fh, $row);
        fclose($fh);

        header("Location: success.php");
        exit;
        
    } else {
        die("Error: No hotel selected. Please go back and try again.");
    }
}