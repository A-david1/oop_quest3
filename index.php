<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';


$tutut = new Car("vert", 4, "fuel");
$monGrosCamion = new Truck('rouge avec des flammes', 3, 'fuel', 32000);
$poulidorBike = new Bicycle("jamais premier", 1);
$motorWay = new MotorWay();
$residentialWay = new ResidentialWay();


$motorWay->addVehicle($monGrosCamion);
$motorWay->addVehicle($tutut);
$motorWay->addVehicle($poulidorBike);
var_dump($motorWay->getCurrentVehicles());


$residentialWay->addVehicle($tutut);
$residentialWay->addVehicle($poulidorBike);
var_dump($residentialWay->getCurrentVehicles());


