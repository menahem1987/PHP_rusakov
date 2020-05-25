<?php
    trait CanMove{
        public function move(){
            echo 'Движение автомобиля';
        }
    }
    trait CanFly{
        public function fly(){
            echo 'Движение самолета';
        }
    }
    class Car1{
        use CanMove;
    }
    class Fly1{
        use CanFly;
    }
    $car = new Car1();
    echo $car->move().'<br/>';
    $air = new Fly1();
    echo $air->fly();
?>
