<?php

abstract class HighWay {

    protected array $currentVehicles=[];
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed) 
    {
        $this->nbLane=$nbLane;
        $this->maxSpeed=$maxSpeed;
    }

    public function getCurrentVehicles():array {
         return $this->currentVehicles;
    }
   public function getNbLane():int {
    return $this->nbLane;
}
public function setNbLane():void {
    $this->nbLane;
}
public function setMaxSpeed():void {
    $this->maxSpeed;
}
public function getMaxSpeed():int {
    return $this->maxSpeed;
}

abstract function addVehicle($vehicles);
}