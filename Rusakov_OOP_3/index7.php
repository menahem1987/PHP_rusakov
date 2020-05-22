<?php
    class Point
    {
        private $x;
        private $y;
        private $ae;
        public function __construct()
        {
            $this->x = 1;
            $this->y = 2;
        }

        public function __toString()
        {
            $str = "Точка с координатами ($this->x, $this->y)";
            return$str;
        }
        public function ccc($a, $b)
        {
            $c = $a+$b;
            return $c;
        }
        public function sinu($a)
        {
            $c = sin($a);
            return $c;
        }
        public function bbb($a, $b)
        {
            $c = $a*$b;
            return $c;
        }
        public function __get($name)
        {
            return $this->ae[$name] = 'Класс Point работает только в двумерном пространстве'.'<br/>';
        }
        public function __set($name, $value)
        {
            return $this->ae[$name] = $value;
        }
        public function __call($methods, $arguments)
        {
            echo "$methods «Класс Point работает только в двумерном пространстве»".print_r($arguments, true);
        }
    }
    $point = new Point();
    echo $point.'<br/>';
    echo $point->ccc(2,5).'<br/>';
    echo $point->sinu(20).'<br/>';
    echo $point->bbb(2,5).'<br/>';
    echo $point->z.'<br/>';
    $point->z = 'afsda';
    echo $point->z.'<br/>';
    $r = clone $point;
    echo $r->ccc(5,6).'<br/>';
    echo $point->setZ(1,2,3,4);
?>
