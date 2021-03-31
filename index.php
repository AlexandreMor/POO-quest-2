<?php

// index.php


require_once 'Bicycle.php';
require_once 'Car.php';

$flanders = new Car('Purple', 4, 'gasoline');
$homer = new Car('Pink', 5, 'gasoline');
$krusty = new Car('Grey', 4, 'gasoline');
$marge = new Car('Red', 5, 'gasoline');
$marge->start();
$marge->forward();
$marge->brake();
var_dump($marge->getCurrentSpeed());

$bike = new Bicycle('red');
$bike->forward();
$bike->forward();
$bike->forward();
$bike->brake();
var_dump($bike->getCurrentSpeed());
