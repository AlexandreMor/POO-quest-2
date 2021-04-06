<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$flanders = new Car('Purple', 4, 'gasoline');
$homer = new Car('Pink', 5, 'gasoline');
$krusty = new Car('Grey', 4, 'gasoline');
$marge = new Car('Red', 5, 'gasoline');
$marge->start();
$marge->forward();
$marge->brake();
var_dump($marge->getCurrentSpeed());

$bike = new Bicycle('red', 2);
$bike->forward();
$bike->forward();
$bike->forward();
$bike->brake();
var_dump($bike->getCurrentSpeed());

$truck1 = new Truck('white', 3, 'fuel', 60);
$truck1->setSpace(40);
$truck1->setEnergyLevel(70);
$truck1->spaceLeft();
$truck1->setNbWheels(4);
$truck1->setCurrentSpeed(40);
print_r($truck1->spaceLeft());

$truck2 = new Truck('red', 4, 'fuel', 60);
$truck2->setSpace(60);
$truck2->setEnergyLevel(50);
$truck2->spaceLeft();
$truck2->setNbWheels(6);
$truck2->setCurrentSpeed(80);
var_dump($truck2);
print_r($truck2->spaceLeft());

$truck2->forward();
var_dump($truck2->getCurrentSpeed());
$truck2->brake();
var_dump($truck2->getCurrentSpeed());

$motorWay=new MotorWay(4,130);
$pedestrianWay= new PedestrianWay(1,10);
$residentialWay= new ResidentialWay(2,50);

$motorWay->addVehicle($bike);
$pedestrianWay->addVehicle($bike);
$residentialWay->addVehicle($marge);

print_r($motorWay);
print_r($pedestrianWay);
print_r($residentialWay);