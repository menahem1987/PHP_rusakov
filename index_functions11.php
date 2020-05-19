<?php
    $reg = '?\w\d\w\wc?';
    $str = '57abc';
    echo preg_match($reg, $str);

    $str = 'a7cdc';
    echo preg_match($reg, $str);

    $str = 'A889c';
    echo preg_match($reg, $str);

    $str = '/7abc';
    echo preg_match($reg, $str);

    $str = '57abd';
    echo preg_match($reg, $str);
?>
