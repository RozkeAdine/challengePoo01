<?php
class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $fuel;
    private int $lvlFuel;

    public function __construct(string $color, int $nbSeats, string $fuel)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuel =$fuel;
    }

    public function starter(): string
    {
        $this->currentSpeed = 0;
        return 'ready';
    }
    public function forward(): string
    {
        $this->currentSpeed = 50;
        return 'go !!';
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }
    public function setnbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
    public function setnbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    
    public function getfuel(): string
    {
        return $this->fuel;
    }
    public function setlvlFuel(): string
    {
        return $this->lvlFuel;
    }
}

?>