<?php
    class Point{
        public $x = 5;
        public $y = 8;
        public function __construct($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function getX()
        {
            return $this->x;
        }
        public function getY()
        {
            return $this->y;
        }
        public function setX($x)
        {
            $this->x = $x;
        }
        public function setY($y)
        {
            $this->y = $y;
        }
    }
    $rc = new ReflectionClass('Point');
    $t = new Point(2,5);
    echo $t->x.'<br>';
    echo $t->y.'<br>';
    echo $rc.'<br>'.'<br>';
    echo $rc->name.'<br>';
    $rcs = $rc->getProperties(ReflectionProperty::IS_PUBLIC);
    foreach ($rcs as $k){
        print $k->getName().'<br>';
    }
    var_dump($rcs);
    echo $rc->getMethod('getX').'<br>';
    echo $rc->getMethod('getY').'<br>';
    echo $rc->getMethod('setX').'<br>';
    echo $rc->getMethod('setY').'<br>';
    echo $rc->getConstructor();
?>
