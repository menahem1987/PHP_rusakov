<?php
    $x= false;
    $y= false;
    class Point{
        public $x;
        public $y;
        public function __construct($x,$y)
        {
            $this->x = $x;
            $this->y = $y;
        }
    }
    $x = $_POST['x'];
    $y = $_POST['y'];

    if (isset($_POST['save'])){
        $point=new Point($x,$y);
        $str = serialize($point);
        echo $str;}
    if (isset($_POST['load'])){
    $fi = fopen('a.txt', 'a+');
    fwrite($fi, $x);
    fclose($fi);}
    if (isset($_POST['del'])) {
        if (file_exists('a.txt')){
    unlink('a.txt');}
    }
?>
<form action="index.php" name="myform" method="post">
    <input type="text" name="x" value="<?=$x?>">
    <input type="text" name="y" value="<?=$y?>"> <br><br>
    <input type="submit" name="save" value="Сохранить">
    <input type="submit" name="load" value="Загрузить">
    <input type="submit" name="del" value="Удалить">
</form>
