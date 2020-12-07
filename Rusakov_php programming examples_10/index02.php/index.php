<?php
    require_once 'captcha_class.php';
    define('DB_Host', 'localhost');
    define('DB_User', 'root');
    define('DB_Password', '');
    define('DB_Name', 'registration');
try {
    $pdo = new PDO('mysql:host='.DB_Host.';dbname='.DB_Name, DB_User, DB_Password);}
    catch(PDOException $t){echo 'Ошибка входа в базу данных';}

    if (isset($_POST["reg"])) {
        if (isset($_POST['name']) && isset($_POST['login']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $query = "INSERT INTO `registr`(`name`,`login`,`password`)
            VALUES ('$name', '$login', '$password')";
            if (Captcha::check($_POST['captcha'])) {
            $query = $pdo->prepare($query);
            $query->execute([$_POST['reg']]);
            echo "Здравствуйте $name".'<br>';}
            else exit('Проверочный код введён неверно!');
        }
        else echo 'Введите правильные параметры';
    }
?>
<form name="reg" action="index.php" method="post">
    <p>
        Введите имя:<input type="text" name="name">
    </p>
    <p>
        Введите логин:<input type="text" name="login">
    </p>
    <p>
        Введите пароль:<input type="text" name="password">
    </p>
    <p>
        <img src="captcha.php" alt="">
    </p>
    <p>
        Проверка на робота:<input type="text" name="captcha">
    </p><p>
        <input type="submit" name="reg" value="Зарегистрироваться">
    </p>
</form>
