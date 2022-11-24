<?php
//object class
class hotelClass{

    //intantion for variable used to store data from json file
    public $hotel = [];

    function __constuct(){

    }

    //decodes gets and decodes json file and stores within $hotel variable
    public function popHotel(){

        $data = file_get_contents('varHotels.json');
        $this -> hotel = json_decode($data, true);
    }

    //simple get for $hotel variable
    public function getHotel(){

        return $this -> hotel;
    }

    //code that gets the difference between the Check in and Check out dates.
    public function getNumDays($in, $out){
        $date1 = new DateTime($in);
        $date2 = new DateTime($out);

        $interval = $date1->diff($date2);
        return $interval->format('%r%a');
    }

    //code to display menu 2
    public function disp($hot, $r, $d, $p, $b, $k){
        if($p==1){
            $p = 'yes';
        }else{
            $p = 'no';
        }
        if($b==1){
            $b = 'yes';
        }else{
            $b = 'no';
        }
        if($k==1){
            $k = 'yes';
        }else{
            $k = 'no';
        }
        echo "<h1>".$hot."</h1>".
        "<div class='transbox'>".
            "Total Amount for ".$d." days: R".$r*$d."<br>".
            "Is there a pool: ".$p."<br>".
            "Is there a bar: ".$b."<br>".
            "Is it child friendly: ".$k."<br>".
        "<button value='".$hot."' name='send' >Choose this Hotel?</button><br>".
        "</div>";
    }
}