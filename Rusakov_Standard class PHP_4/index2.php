<?php
    class Ted
    {
        public $x = 0;
        public $y = 10;
        public $z = 'sdgf';
    }
class myIterator implements Iterator {
    private $index = 0;
    private $list = [1, 4, 'fd',6];
    public function rewind() {
        $this->index = 0;
    }

    public function current() {
        return $this->list[$this->index];
    }

    public function key() {
        return $this->index;
    }

    public function next() {
        ++$this->index;
    }

    public function valid() {
        return isset($this->list[$this->index]);
    }
}
$it = new myIterator;
foreach($it as $key => $value) {echo "$key = $value".'<br/>';
    echo "\n";
}
$ted = new Ted();
foreach ($ted as $k=> $value) echo '<br/>'."$k = $value";
?>