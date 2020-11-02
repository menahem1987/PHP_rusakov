<?php
    define('DB_Host', 'localhost');
    define('DB_User', 'root');
    define('DB_Password', '');

    $mysqli = @new mysqli(DB_Host, DB_User, DB_Password);
    if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
    $result_set = $mysqli->query("SELECT `title`, `offset` FROM `mysite`.`time zone`");
    $table = [];
    while (($row = $result_set->fetch_assoc()) !=false){
        $table[] = $row;
    }
?>
<form name="timez" action="index.php" method="post">
    <p>
        <select name="sel1" size=3 multiple>
            <?php  for ($i=0;$i<count($table);$i++){?>
            <option><?php print_r($table[$i]["title"]);
            }?>
        </select>
    </p>
    <p>
        <input type="submit" name="timez" value="Time zone">
    </p>
</form>
<?php
    if(isset($_POST['timez'])){
        if (isset($_POST['sel1'])) {
            for ($i=0;$i<count($table);$i++){
            if ($_POST['sel1'] == $table[$i]["title"]) {?>
                Смещение от Гринвича:<?php print_r($table[$i]["offset"]);?> секунд.
        <?php
            }
            }
        }
    }
    else echo 'Her';
    $mysqli->close();
?>
