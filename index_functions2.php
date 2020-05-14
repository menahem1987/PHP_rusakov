<?php
$x = false;
$y = false;
if (isset($_POST['myform'])){
$x=$_POST['x'];
}
if (isset($_POST['myform'])){
$y=$_POST['y'];
}
echo mb_strlen($x);
echo '<br/>';
echo $x;
echo '<br/>';
echo str_replace($y, '<b>'.$y.'</b>', $x);
echo '<br/>';

?>
<form name="myform" method="post" action="index.php">
    <br><br>
    text область:<input type="text" name="x" value="<?=$x?>"> <br><br><br>
    <p>text поле:<input maxlength="25" name="y" size="40" value="<?=$y?>"></p>
    <input type="submit" name="myform" value="output"> <br><br><br>
</form>
