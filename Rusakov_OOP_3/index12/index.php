<?php
use ru\car\CanMove;
use ru\air\CanFly;
require_once 'car.php';
require_once 'Aircraft.php';

$air = new ru\air\Fly1();
echo $air->fly();
$move = new ru\car\Car1();
echo $move->move();
?>