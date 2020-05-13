<?php
$y = [50.25, 20.38, 50.78, 75.75, 50];
foreach ($y as $value){echo $value.' ';}
echo '<br/>';
for ($i=0;$i<count($y);$i++){
    $y[$i] *= 0.77;
    echo ' '.round($y[$i], 2);
}
$y= false;
if (isset($_POST['myform'])){$y = $_POST['y'];
}
echo '<br/>';


require_once 'lib/functions.php';
$x= false;
if (isset($_POST['myform'])){
    $x = $_POST['x'];
}
echo  is_string($x);
echo '<br/>';
her($x);

echo '<br/>';
echo mt_rand($x, $y);
echo '<br/>';
?>
<form name="myform" method="post" action="index.php">
    <br><br>
    <input type="text" name="x" value="<?=$x?>"> <br><br><br>
    <input type="text" name="y" value="<?=$y?>"> <br><br><br>
    <input type="submit" name="myform" value="output"> <br><br><br>
</form>
