<?php
require_once 'Vehicule.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'LightableInterface.php';
require_once 'SkateBoard.php';

$bike = new Bicycle('green', 1);
$bike->setCurrentSpeed(9);
$lightSwitch = $bike->switchOn();
if ($lightSwitch == false) {
    echo $light = "Bycicle light is : Off" . PHP_EOL;
} else {
    echo $light = "Bycicle light is : On" . PHP_EOL;
}


$car = new Car('reed', 4, 'electric');
$car->setCurrentSpeed(80);
$lightSwitch = $car->switchOn();
if ($lightSwitch == false) {
    echo $light = "Car light is : Off" . PHP_EOL;
} else {
    echo $light = "Car light is : On" . PHP_EOL;
}
