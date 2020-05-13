<?php
$x= false;
if (isset($_POST['myform'])){
    $x = $_POST['x'];
}
echo  is_string($x);
echo '<br/>';
for ($i=0;$i<strlen($x);$i+=2) {echo $x[$i];}
?>
<form name="myform" method="post" action="index.php">
    <br><br>
    <input type="text" name="x" value="<?=$x?>"> <br><br><br>
    <input type="submit" name="myform" value="output"> <br><br><br>
</form>
