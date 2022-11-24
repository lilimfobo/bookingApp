<?php
//importing PHPMailer objects
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Fetching hotel object and PHPMailer object
require 'hotel.php';
require 'vendor/autoload.php';

//instantiation of objects and arrays
$hotelC = new hotelClass();
$compare = [];
$hotelC->popHotel();
$compare = $hotelC->getHotel();
$mail = new PHPMailer(true);

//start of html
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Title, linking and styleing section -->
    <title>OOP Booking App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- import stylesheet from w3schools -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", Arial, Helvetica, sans-serif;
            text-align: center;
        }

        body {
            background-image: url('assets/monte.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        h1 {
            background: rgba(255, 255, 255, 0.7);
        }

        div.transbox {
            margin: 30px;
            border: 1px solid black;
            display: inline-block;
            background: rgba(255, 255, 255, 0.7);
        }

        form {
            margin: 5%;
            font-weight: bold;
        }
    </style>
</head>

<body class="w3-light-grey">
    <header>
        <h1>Hotel Reservations</h1>
    </header>
    <!-- Menu 1 HTML -->
    <?php if (!$_POST) { ?>
        <div class="transbox">
            <form method='post'>

                <label for="name">First Name:</label><br>
                <input type='text' name='name' required="true"><br>

                <label for="surname">Surname:</label><br>
                <input type='text' name='surname' required="true"><br><br>

                <label for="email">Email:</label><br>
                <input type='email' name='email' required="true"><br><br>

                <label for="checkIn">Check-in Date:</label><br>
                <input type='date' name='checkIn' required="true"><br><br>

                <label for="checkOut">Check-out Date:</label><br>
                <input type='date' name='checkOut' required="true"><br><br>

                <label for="hotel1">Hotel first choice:</label>
                <select name='hotel1' required="true">
                    <option></option>
                    <?php
                    //code setting up drop down menu
                    for ($i = 0; $i < count($compare); $i++) {

                        echo "<option value='" . ($i) . "'>" . $compare[$i]['name'] . " R" . $compare[$i]['rate'] . "</option>";
                    }
                    ?>
                </select><br><br>

                <label for="hotel2">Hotel second choice:</label>
                <select name='hotel2' required="true">
                    <option></option>
                    <?php
                    //code setting up drop down menu
                    for ($i = 0; $i < count($compare); $i++) {

                        echo "<option value='" . ($i) . "'>" . $compare[$i]['name'] . " R" . $compare[$i]['rate'] . "</option>";
                    }
                    ?>
                </select><br><br>

                <button type='submit'>Compare</button>
            </form>
        </div>
        <?php
    //checks if the Check-In date and Check-Out date are valid
    } else {
        if($hotelC->getNumDays($_POST['checkIn'],$_POST['checkOut']) > 0 or $pos = true){
            $pos = true;
        }else{
            $pos = false;
            echo "<div class='transbox'>
                    <form method='post'>
                        <label for=''>Please enter a valid date</label><br>
                        <button type='submit'>Back</button>
                    <form method='post'>
                  </div>";
            $_POST = array();
        }
    }
    if ($pos == true){
        //Menu 2 code
        //Storing data from POST into variables
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $checkIn = $_POST['checkIn'];
        $checkOut = $_POST['checkOut'];
        $hotel1 = $_POST['hotel1'];
        $hotel2 = $_POST['hotel2'];
        $numDays = $hotelC->getNumDays($checkIn, $checkOut);

        if (empty($_POST['send'])) {    //Checks if $_POST['send'] has anything stored in it
        ?>
        <div class="transbox">
            <form method='post'>
                <?php
                //calling object to display menu 2
                $hotelC->disp($compare[$hotel1]['name'], $compare[$hotel1]['rate'], $numDays, $compare[$hotel1]['pool'], $compare[$hotel1]['bar'], $compare[$hotel1]['kid']);
                $hotelC->disp($compare[$hotel2]['name'], $compare[$hotel2]['rate'], $numDays, $compare[$hotel2]['pool'], $compare[$hotel2]['bar'], $compare[$hotel2]['kid']);
                ?>
            </form>
        </div>
    <?php
        } else {
            $send = $_POST['send'];
            //code for sending email
            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.mailtrap.io';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'b2d7d1788a8c08';
                $mail->Password   = 'de45537a61dbc0';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 2525;

                $mail->setFrom('HotelReserve@hotels.com', 'Hotel Reservation');
                $mail->addAddress('joe@example.com', $name." ".$surname); //use $email here instead of example

                $mail->isHTML(true);
                $mail->Subject = 'Hotel Reservation';
                $mail->Body    = "<h1>Here are the details of your Reservation</h1>
                <body>
                    Full Name: ".$name." ".$surname."
                    Check-In Date: ".$checkIn."
                    Check-out Date: ".$checkOut."
                    Hotel: ".$send."
                    Hope you enjoy your stay!
                </body>";

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
    ?>

</body>

</html>