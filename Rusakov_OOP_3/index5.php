<?php
    class Point {
        private $x;
        private $y;
        public function __construct($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function getx(){
            return $this->x;
        }
        public function gety(){
            return $this->y;
        }
        public function setx($x){$this->x = $x;}
        public function sety($y){$this->y = $y;}
    }
    $point = new Point('5','3');
    echo $point->getx();
    echo $point->gety();

    echo $point->setx(4);
    echo $point->sety(67);
    echo '<br/>';
    echo $point->getx();
    echo $point->gety();
?>
