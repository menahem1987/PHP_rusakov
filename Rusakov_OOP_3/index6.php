<?php
    class Point{
        private $x;
        private $y;
        private static $counter = 0;
        public function __construct($a,$b)
        {   $this->x=$a;
            $this->y=$b;
        }
        public static function aaa(){
            self::$counter++;
            return $a=34;
        }
        public static function bbb(){
            self::$counter++;
            return $b=25;
        }
        public static function ccc(){
            self::$counter++;
            return $c=65;
        }
        public static function getCounter(){
            return self::$counter;
        }
    }
    $point = new Point ('3','5');
    echo '<br/>';
    echo Point::aaa().'<br/>';
    echo Point::bbb().'<br/>';
    echo Point::ccc().'<br/>';
echo Point::getCounter();
?>
