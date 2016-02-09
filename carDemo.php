<?php
require 'autoload.php';

$ferrari = new Car('Ferrari', 400, 0, 'red', 0);
$bmw = new Car('bmw' , 320, 0 , 'blue' , 0);

echo $ferrari->display();

$ferrari->setCurrentGear(3);
$ferrari->setCurrentSpeed(60);

echo $ferrari->display();

$somebody = new Person("Ivan", 36);
$ferrari->setOwner($somebody);
echo $ferrari->getOwner();

$ferrari->accelerate(200);
echo("<br>");
echo $ferrari->getCurrentSpeed();
echo("<br>");
$ferrari->changeGearUp();
echo $ferrari->getCurrentGear();
//$ferrari->accelerate(300);
//echo $ferrari->getCurrentSpeed();


