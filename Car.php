<?php

require_once 'Vehicle.php';


class Car extends Vehicle
{
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)

    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    public function start(): string
    {
        $this->currentSpeed = 5;

        return "Let's go !";
    }

    public function getEnergy(): string

    {

        return $this->energy;
    }


    public function setEnergy(string $energy): Car

    {

        if (in_array($energy, self::ALLOWED_ENERGIES)) {

            $this->energy = $energy;
        }

        return $this;
    }


    public function getEnergyLevel(): int

    {

        return $this->energyLevel;
    }


    public function setEnergyLevel(int $energyLevel): void

    {

        $this->energyLevel = $energyLevel;
    }
}
