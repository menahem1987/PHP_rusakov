<?php
namespace ru\car;
trait CanMove{
    public function move(){
        echo 'Движение автомобиля';
    }
}
class Car1{
    use CanMove;
}
?>