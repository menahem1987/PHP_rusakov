<?php
    class Point {
        private $x;
        private $y;
        public function getx(){
            return $this->x;
        }
        public function gety(){
            return $this->y;
        }
        public function setx($x){$this->x = $x;}
        public function sety($y){$this->y = $y;}
    }
    $point = new Point();

    echo $point->setx(4);
    echo $point->sety(67);

    echo $point->getx();
    echo $point->gety();
?>
