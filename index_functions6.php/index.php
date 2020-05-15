<?php
    $arr = parse_ini_file('config.ini');
    print_r($arr);
    echo '<br/>';
    print_r($arr['color']);
    $y = $arr['color'];
    echo '<br/>';
    print_r($arr['font-size']);
    $x = $arr['font-size'];
    echo $x, $y;
    echo '<br/>','<br/>','<br/>';
$arr = parse_ini_file('en.ini');
print_r($arr);
echo '<br/>';
$t = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo $t;
echo '<br/>';
if( $t[0] == 'r'){$arr = parse_ini_file('ru.ini');
print_r('TITLE:'.$arr['TITLE']);
}
elseif( $t[0] == 'e'){$arr = parse_ini_file('en.ini');
print_r('TITLE:'.$arr['TITLE']);
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p style="font-size:<?=$x?>; color: <?=$y?>">Карл у Клары украл кораллы, а Клара у Карла украла кларнет.</p>
    <p style="font-size:<?=$x?>; color: <?=$y?>">Если бы Карл у Клары не крал кораллы, то Клара у Карла не крала б кларнет.
        Королева Клара кавалера Карла строго карала за кражу кораллов.</p>
    <br><br><br><br>
</body>
</html>
