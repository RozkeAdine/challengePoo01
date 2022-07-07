<?php
require_once 'class/Bicycle.php';
require_once 'class/Car.php';
//bike
$bike = new Bicycle();
$bike->color = 'blue';
$bike->currentSpeed = 0;
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
var_dump($bike);


//car
$car = new Car('blue', 2, 'electric');
$color = 'blue';
//$currentSpeed = 0;
$nbWheels = 4;
$nbSeats = 2;
$fuel = 'electric';
$lvlFuel = 100;
// Moving car
echo $car->starter();
echo '<br> Vitesse de la voiture : ' . $car->getcurrentSpeed() . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getcurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getcurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
var_dump($car)?>