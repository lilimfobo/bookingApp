<?php
require_once "../classes/class.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmBooking'])) {

    $name    = htmlspecialchars($_POST['name'] ?? 'Unknown');
    $surname = htmlspecialchars($_POST['lastName'] ?? 'Unknown');
    $email   = htmlspecialchars($_POST['email'] ?? 'Unknown');

    $selectedHotel = $_SESSION['selectedHotel'] ?? null;
    $inDate        = $_SESSION['inDate'] ?? 'N/A';
    $outDate       = $_SESSION['outDate'] ?? 'N/A';

    if ($selectedHotel instanceof Hotel) {
        
        $filename = "bookings.csv";
        $dirPath  = __DIR__ . "/../data"; 
        $filePath = $dirPath . "/" . $filename;

        if (!is_dir($dirPath)) {
            mkdir($dirPath, 0777, true);
        }

        $row = [
            $name, 
            $surname, 
            $email, 
            $selectedHotel->getId(), 
            $selectedHotel->getName(), 
            $inDate, 
            $outDate, 
            number_format($selectedHotel->getCostPerNight(), 2)
        ];

        $fileExist = file_exists($filePath);
        $fh = fopen($filePath, "a");

        if ($fh !== false) {
            if (!$fileExist) {
                fputcsv($fh, ["First Name", "Last Name", "Email", "Hotel ID", "Hotel Name", "Check-in", "Check-out", "Rate"]);
            }

            fputcsv($fh, $row);
            fclose($fh);

            header("Location: success.php");
            exit;
        } else {
            die("Error: System could not write to the data folder.");
        }
        
    } else {
        die("Error: No hotel selection found. Please restart your booking.");
    }
} else {
    header("Location: ../index.php");
    exit;
}