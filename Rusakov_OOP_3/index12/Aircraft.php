<?php
namespace ru\air;
trait CanFly{
    public function fly(){
        echo 'Движение самолета';
    }
}
class Fly1{
    use CanFly;
}
?>
