<?php
class Hotel {
    public function __construct(
        private int $id,
        private string $name,
        private float $costPerNight,
        private int $availRooms,
        private bool $fullyBooked,
        private string $hotelImg,
        private array $hotelFacilities = []
    ) {}

    /**
     * Calculates the duration of stay using the modern DateTime object.
     */
    public static function calculateNumDays(string $startDate, string $endDate): int 
    {
        $start = new DateTime($startDate);
        $end = new DateTime($endDate);
        
        return (int) $start->diff($end)->format("%a");
    }

    /**
     * Calculates the total cost based on the number of days.
     */
    public function calculateCostOfStay(int $numDays): float 
    {
        return $numDays * $this->costPerNight;
    }


    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function getCostPerNight(): float {
        return $this->costPerNight;
    }

    public function setCostPerNight(float $costPerNight): self {
        $this->costPerNight = $costPerNight;
        return $this;
    }

    public function getAvailRooms(): int {
        return $this->availRooms;
    }

    public function setAvailRooms(int $availRooms): self {
        $this->availRooms = $availRooms;
        return $this;
    }

    public function getFullyBooked(): bool {
        return $this->fullyBooked;
    }

    public function setFullyBooked(bool $fullyBooked): self {
        $this->fullyBooked = $fullyBooked;
        return $this;
    }

    public function getImg(): string {
        return $this->hotelImg;
    }

    public function setImg(string $img): self {
        $this->hotelImg = $img;
        return $this;
    }

    public function getFacilities(): array {
        return $this->hotelFacilities;
    }

    public function setFacilities(array $facilities): self {
        $this->hotelFacilities = $facilities;
        return $this;
    }
}