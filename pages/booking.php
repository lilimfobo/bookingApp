<?php

require ".../classes/class.php";

session_start();

if (isset($_POST['confirmBooking'])) {

    $name = $_POST['name'];
    $surname = $_POST['lastName'];
    $email  = $_POST['email'];

  }

   // --- Creating CSV file ---//

   $headers = ["Name", "Surname", "Email", "hotelID", "HotelName", "inDate", "outDate", "Costpernight"];

   $data = [$name, $surname, $email , $selectedHotel->getId() ,$selectedHotel->getName() ,$inDate, $outDate, $selectedHotel->getCostPerNight()];
 
 
   //---- Open CSV file ---//
 
   $fh = fopen("file.csv", "w");
 
 
   //---- Create headers ---//
 
   fputcsv($fh, $headers);
 
 
   //--- populate the data ---//
 
   foreach ($data as $fields) {
     fputcsv($fh,$fields);
   }
 
 
   //---- Close CSV file ---//
   fclose($fh);



?>
