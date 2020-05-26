<?php
spl_autoload_register(function($name) {
    require "D:\OSPanel\domains\mysite.local\lib\\".$name.".php";
});
    $air = new Fly1();
    echo $air->Fly().'<br/>';
    $car = new Car1();
    echo $car->move();
?>