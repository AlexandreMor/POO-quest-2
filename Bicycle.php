<?php
require_once "Vehicle.php";
require_once "LightableInterface";

// Bicycle.php



class Bicycle extends Vehicle implements LightableInterface

{
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10) {
            return true;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}
