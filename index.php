<?php
// index.php

require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'SpeedOmeter.php';

$car = new Car('green', 4, 'electric');
try{
    $car->start();
}catch (Exception $e){
    echo "Exception  : " . $e->getMessage() . "\n";
    $car->setHasParkBrake(false);
    echo "Frein à main désactivé.\n";
} finally {
    echo "Ma voiture roule comme un donut.\n";
}
echo Speedometer::convertKmToMiles(10);