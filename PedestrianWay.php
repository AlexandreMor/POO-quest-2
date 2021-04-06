<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay {

    public function __construct(int $nbLane, int $maxSpeed) 
    {
        parent::__construct($nbLane,$maxSpeed);
    }

    public function addVehicle($vehicles):string {
        if ($vehicles instanceof Bicycle) {
            $this->currentVehicles[]=$vehicles;
            return "Véhicule ajouté !";
        }
        else {
            return "Accès interdit à ce véhicule";
        }
    }
}