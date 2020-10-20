<?php
    define('DB_Host', 'localhost');
    define('DB_User', 'root');
    define('DB_Password', '');
    define('DB_Name', 'mysite');

    $mysqli = @new mysqli(DB_Host, DB_User, DB_Password);
    if ($mysqli->connect_errno) exit('Ошибка соединения БД');
    $mysqli->set_charset('utf8');
    $mysqli->query('CREATE DATABASE `chaspoj`');
    $mysqli->close();
    $mysqli = @new mysqli(DB_Host, DB_User, DB_Password, 'chaspoj');
    if ($mysqli->connect_errno) exit('Ошибка соединения БД');
    $mysqli->query("CREATE TABLE `time zone` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `offset` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
    $mysqli->query("INSERT INTO `time zone` (`id`, `title`, `offset`) VALUES
(1, 'Москва/Moscow', 10800),
(2, 'Саратов/Saratov', 14400),
(3, 'Екатеринбург/Ekaterinburg', 18000)");
//    $mysqli->query('DROP DATABASE `chaspoj`');
    $mysqli->close();
?>
