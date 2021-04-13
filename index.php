<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$flanders = new Car('Purple', 4, 'fuel');
$homer= new Car('Pink', 5, 'fuel');

try {

    $homer->start();
    
    } catch(Exception $e){
    
        $homer->getParkBrake()==="Le frein à main est actif !";
        echo "Exception received  : ". $e->getMessage() . "n";
        $homer->setParkBrake()===false;
    
    } finally {
    
        echo "Ma voiture roule comme un donut";
    
    }