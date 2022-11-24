<?php

class Hotel {

    // ----- Fields -----
    private $id;
    private $name;
    private $costPerNight;
    private $availRooms;
    private $fullyBooked;
    private $hotelImg;

    // ------- Constructor ---------

    public function __construct($idInput, $nameInput, $cpnInput, $roomsInput, $fullyBookedInput, $imgInput) {

        $this->id = $idInput;
        $this->name = $nameInput;
        $this->costPerNight = $cpnInput;
        $this->availRooms = $roomsInput;
        $this->fullyBooked = $fullyBookedInput;
        $this->hotelImg = $imgInput;
    
    }
    //------- custom methods ---------

    // method that calculates duration of trip
    public static function calculateNumDays($startDate, $endDate) {

        // Calculating the difference in timestamps
        $diff = strtotime($endDate) - strtotime($startDate);
            
        // 1 day = 24 hours  ->  24 * 60 * 60 = 86400 seconds
        $numDays = abs(round($diff / 86400));

        return $numDays;
}

 // takes in duration and calculate whole cost of trip
 public function calculateCostOfStay($numDays){

    $amount =  $numDays * $this->costPerNight;

    return $amount;
}

    //------- getters and setters ---------

    public function getImg() {
        return $this->hotelImg;
    }

    public function setImg($imgInput) {
       $this->hotelImg = $imgInput;
       
       return $this;
    }


    public function getId() {
        return $this->id;
    }

    public function setId($newId) {
       $this->id = $newId;
       
       return $this;
    }
    public function getFacilities() {
        return $this->hotelFacilities;
    }


    public function setFacilities($hotelFac){
        $this->hotelFacilities = $hotelFac;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of costPerNight
     */ 
    public function getCostPerNight()
    {
        return $this->costPerNight;
    }

    /**
     * Set the value of costPerNight
     *
     * @return  self
     */ 
    public function setCostPerNight($costPerNight)
    {
        $this->costPerNight = $costPerNight;

        return $this;
    }

    /**
     * Get the value of fullyBooked
     */ 
    public function getFullyBooked()
    {
        return $this->fullyBooked;
    }

    /**
     * Set the value of fullyBooked
     *
     * @return  self
     */ 
    public function setFullyBooked($fullyBooked)
    {
        $this->fullyBooked = $fullyBooked;

        return $this;
    }

    /**
     * Get the value of availRooms
     */ 
    public function getAvailRooms()
    {
        return $this->availRooms;
    }

    /**
     * Set the value of availRooms
     *
     * @return  self
     */ 
    public function setAvailRooms($availRooms)
    {
        $this->availRooms = $availRooms;

        return $this;
    }
}
?>