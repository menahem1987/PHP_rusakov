<?php
$f1 = fopen('mail.txt', 'w');
if (isset($_POST['t1'])){
    $ar = $_POST['t1'];
}
fwrite($f1, "От кого: $ar\r\n");
if (isset($_POST['t2'])){
    $ar = $_POST['t2'];
}
fwrite($f1, "Кому: $ar\r\n");
if (isset($_POST['t3'])){
    $ar = $_POST['t3'];
}
fwrite($f1, "Тема: $ar\r\n");
if (isset($_POST['t4'])){
    $ar = $_POST['t4'];
}
fwrite($f1, "Текст письма: $ar\r\n");
fclose($f1);
?>
<form name="her" method="post" action="index.php">
    <ul>
        <p><input type="email" name="t1"value="">От кого </p>
        <p><input type="email" name="t2" value="">Кому </p>
        <p><input type="text" name="t3" value="">Тема </p>
        <p><input type="text" name="t4" style="height: 100px" value="">Текст письма </p>
        <input type="submit" name="Send" value="Отправить">
    </ul>
</form>
