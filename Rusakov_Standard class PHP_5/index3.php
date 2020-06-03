<?php
    class Ted
    {
        public $x = 0;
        public $y = 10;
        public $z = 'sdgf';
    }
class Hor implements Iterator, ArrayAccess
{
    private $index = 0;
    public $list = [1, 4, 'fd',6];
    public function rewind() {
        $this->index = 0;
    }
    public function offsetExists($offset)
    {
        return isset($this->list[$offset]);
    }
    public function offsetGet($offset)
    {
        return $this->list[$offset];
    }
    public function offsetSet($offset, $value)
    {
        $this->list[$offset] = $value;
    }
    public function offsetUnset($offset)
    {
        unset($this->list[$offset]);
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
    $hor = new Hor();
    $hor [4] = 'fdsadf';
    $hor [5] = 'fdsadf';
    foreach($hor as $key => $value) {echo "$key = $value".'<br/>';
    echo "\n";
}
$ted = new Ted();
foreach ($ted as $k=> $value) echo '<br/>'."$k = $value";
?>
