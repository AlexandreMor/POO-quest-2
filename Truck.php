<?php

require_once 'Vehicle.php';


class Truck extends Vehicle
{

    private int $energyLevel;

    private int $space;

    private int $storage;

    public function __construct(string $color, int $nbSeats, string $energy, int $storage)

    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorage($storage);
    }

    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    public function getEnergy(): string
    {
        return $this->energy;
    }


    public function setEnergy(string $energy): Truck

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


    public function getSpace(): int

    {

        return $this->space;
    }


    public function setSpace(int $space): void

    {

        $this->space = $space;
    }

    public function getStorage(): int

    {

        return $this->storage;
    }


    public function setStorage(int $storage): void

    {

        $this->storage = $storage;
    }

    public function spaceLeft(): string

    {
        if ($this->getSpace() < $this->getStorage()) {
            return "in filling";
        }
        if ($this->getSpace() === $this->getStorage()) {
            return "full";
        }
    }
}
