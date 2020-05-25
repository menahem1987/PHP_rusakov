<?php
    interface CanMove{
        public function move();
    }
    interface CanFly{
        public function fly();
    }
    class Car implements CanMove{
        public function move(){
            echo 'Движение автомобилей';
        }
    }
    class Aircraft implements CanFly{
        public function fly(){
            echo 'Полет самолета';
        }
    }
    $car = new Car();
    echo $car->move().'<br/>';
    $Air = new Aircraft();
    echo $Air->fly();
?>
