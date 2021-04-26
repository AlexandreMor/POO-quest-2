<?php
require_once 'Vehicle.php';


class ElectricBike extends Vehicle implements RechargeableInterface

{

    public function charge(int $percentage): int

    {

        return $percentage;
    }


    public function unLoad(int $percentage): int

    {

        return $percentage;
    }
}
