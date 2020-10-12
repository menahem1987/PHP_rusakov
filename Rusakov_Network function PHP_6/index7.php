<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require 'PHPMailer.php';
    $mail = new PHPMailer();
    $to = $headers = $subject = $text = false;
    if (isset($_POST['t1'], $_POST['t2'],$_POST['t3'],$_POST['t4'])) {
        $a1 = $a2 = $a3 = $a4 = false;
        $a1 = $_POST['t1'];
        $a2 = $_POST['t2'];
        $a3 = $_POST['t3'];
        $a4 = $_POST['t4'];

        $mail->setFrom("$a1");
        $mail->addAddress("$a2");
        $mail->Subject = "$a3";
        $mail->msgHTML("$a4");
    }

    if (isset($text, $to, $headers, $subject)){echo 'Ok'.'<br>';}
    else echo 'Her';
    if ($mail->send()){echo 'Сообщение отправлено';}
    else echo '<br>'.'Сообщение не отпралено';
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
