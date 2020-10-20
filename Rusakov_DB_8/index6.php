<?php
    define('DB_Host', 'localhost');
    define('DB_User', 'root');
    define('DB_Password', '');
    define('DB_Name', 'mysite');

    $mysqli = @new mysqli(DB_Host, DB_User, DB_Password, DB_Name);
    if ($mysqli->connect_errno) exit('Ошибка соединения БД');
    $mysqli->set_charset('utf8');
    $mysqli->close();
?>
