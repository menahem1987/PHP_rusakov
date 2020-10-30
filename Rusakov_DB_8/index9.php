<?php
    define('DB_Host', 'localhost');
    define('DB_User', 'root');
    define('DB_Password', '');

    $mysqli = @new mysqli(DB_Host, DB_User, DB_Password);
    if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
    $timezone = false;
    $offset = false;

    if (isset($_POST['timez'])){
        $timezone = $mysqli->real_escape_string(htmlspecialchars( $_POST['timezone']));
        if (is_numeric($_POST['offset']) && $_POST['offset']%3600 === 0){
        $offset =$mysqli->real_escape_string(htmlspecialchars($_POST['offset']));
        }
        else echo 'Неверный часовой пояс';
        $ra = rand(10,15);
    $query = "INSERT INTO `mysite`.`time zone` (`id`,`title`,`offset`) 
    VALUES ('$ra','$timezone', '$offset')";
    $result = $mysqli->query($query);
    $mysqli->query("DELETE FROM `mysite`.`time zone` WHERE `time zone`.`id` = $ra");
    }
    $mysqli->close();
?>
<?php if ($result){ ?>
    Сообщение отправлено
<?php } else{ ?>
    Сообщение не отправлено
<?php } ?>
<form name="timez" action="index.php" method="post">
    <p>
        Часовой пояс:<input type="text" name="timezone">
    </p>
    <p>
        Смещение:<input type="text" name="offset">
    </p>
    <p>
        <input type="submit" name="timez">
    </p>
</form>
