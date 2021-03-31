<?php

class Car
{
    private int $wheels = 4;
    private int $currentSpeed = 0;
    private string $color;
    private int $seats;
    private string $energy;
    private int $energyLevel = 80;

    public function __construct(string $color, int $seats, string $fuel)

    {
        $this->color = $color;
        $this->seats = $seats;
        $this->fuel = $fuel;
    }
    public function start(): string
    {
        $this->currentSpeed = 5;

        return "Let's go !";
    }
    public function forward(): string
    {
        if ($this->currentSpeed > 0) {
            $this->currentSpeed = 50;
            return "Let's move on !";
        } else {
            return "Start the car first !";
        }
    }
    public function brake(): string
    {
        $sentence = "";

        while ($this->currentSpeed > 0) {

            $this->currentSpeed--;

            $sentence .= "Brake !!!";
        }
        if ($this->currentSpeed < 0) {
            $this->currentSpeed = 0;
        }
        $sentence .= "I'm stopped !";

        return $sentence;
    }
    public function getNbWheels(): int
    {
        return $this->wheels;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function getNbSeats(): int
    {
        return $this->seats;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}
