<?php
    $text123 = false;
if (isset($_POST['myform'])){
    $text123 = $_POST['text1'];
}
echo $text123.'<br/>';
if (file_exists($text123)){
exec("$text123");
}
else{echo'ERROR HZ';}
?>
<form name="myform" method="post" action="index.php">
    <input type="text" name="text1" value="<?=$text123?>"><br>
    <input type="submit" name="myform" value="output">
</form>
