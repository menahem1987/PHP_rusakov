<?php
if (isset($_POST['t1'], $_POST['t2'],$_POST['t3'],$_POST['t4'])){
    $a1 = $_POST['t1'];
    $a2 = $_POST['t2'];
    $a3 = $_POST['t3'];
    $a4 = $_POST['t4'];
    $to = "Кому: $a1";
    $subject = "Тема: $a3";
    $text = "Текст: $a3";
    $headers= "От кого: $a2";}
else echo 'АЛЯРМ!!!';
if (isset($from, $to, $headers, $subject)){echo 'Ok'.'<br>';}
else echo 'Her';
    if (mail($to, $subject, $text, $headers)){echo 'Сообщение отправлено';}
    else echo '<br>'.'Сообщение не отпралено'
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
