<?php
    $time = date("Y.m.d H:i:s");
    echo $time.'<br/>';
    $reg = '?(\d{4})\.(\d{2})\.(\d{2}) (\d{2}):(\d{2}):(\d{2})?';
    echo preg_match($reg, $time, $matches).'<br/>';
    print_r($matches);
?>
