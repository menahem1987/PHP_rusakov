<?php
    define('DB_Host', 'localhost');
    define('DB_User', 'root');
    define('DB_Password', '');
    define('DB_NAME', 'mysite');
    try {
        $pdo = new PDO('mysql:host='.DB_Host.';dbname='.DB_NAME, DB_User, DB_Password);
    } catch(PDOException $e){
        echo 'Ошибка при входе в базу данных';
    }
$timezone = false;
$offset = false;
    if (isset($_POST['input'])){
        if (isset($_POST['timez'])){
            $timezone = $_POST['timez'];
            if (is_numeric($_POST['offset']) && $_POST['offset']%3600 === 0){
                $offset = $_POST['offset'];
                    $query = "INSERT INTO `time zone`(`title`, `offset`)
                    VALUES ('$timezone', '$offset')";
                    $query = $pdo->prepare($query);
                    $query->execute([$_POST['timez']]);
            }
            else echo 'Неверный ТЗ или ОС';
        }
        else echo "Неверный ТЗ или ОС";
    }
    $query1 = "SELECT * FROM `time zone`";
    $resalt = $pdo->query($query1);
    $row = $resalt->fetchALL(PDO::FETCH_ASSOC);
    $last = $pdo->query("SELECT 'id' FROM `time zone`");
    $la = $last->fetchAll(PDO::FETCH_ASSOC);
    if (isset($_POST['del'])){
    if (isset($_POST['del'])) {
        for ($i = 4; $i < $row[count($la)-1]["id"]+1; $i++) {
            $query2 = "DELETE FROM `time zone` WHERE `id` = '$i'";
            $pdo->query($query2);
        }
    }
    }
if (isset($_POST["timezone2"])){
    if (isset($_POST["sel"])){
        for ($i=0;$i<count($la);$i++){
            if ($_POST["sel"] == $row[$i]["title"]){
                print_r($row[$i]["offset"]);
            }
        }
    }
}
?>
<body>
<div style="width: 200px; background: black; float: left;">
<form name="timezone1" action="index.php" method="post">
    <p style="color: white">TZ<input type="text" name="timez"></p>
    <p style="color: white">OS<input type="text" name="offset"></p>
    <p><input type="submit" name="input" value="Отправить">
    </p>
    <p><input type="submit" name="del" value="удалить">
    </p>
</form>
</div>
<div style="width: 200px; height: 168px; background: black; float: left;">
<form name="timezone2" action="index.php" method="post">
    <p style="color: white"><select name="sel" size="4" mutiple>
            <?php for ($i = 0;$i<count($la);$i++){ ?>
            <option>
                <?php print_r($row[$i]["title"])?>
            </option>
            <?php }
            ?>
        </select> </p>
    <p><input type="submit" name="timezone2" value="Получить">
    </p>
</form>
</div>
<div style="background: yellowgreen; width: 400px;"><?php
    echo '<br>';
        echo @$_POST['timez'].'<br>';
        echo @$_POST['offset'];
    echo '<br>';
    if (isset($row)){
    print_r($row);
    }
        $_POST = null;
    ?></div>
</body>
