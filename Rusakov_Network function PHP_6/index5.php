<?php
    $mysite = 'http://mysite.local/?page=1&ref=partner';
    $arr = parse_url($mysite);
    parse_str($arr['query'], $arr1);
    $x = $arr1['ref'];
    setcookie('my',$x, time()+2);
    $r = $_COOKIE['my'];
    unset($arr1['ref']);
    $arr1 = http_build_query($arr1);
    $url = $arr['scheme'].'://'.$arr['host'].$arr['path'].'?'.$arr1;
header("location: $url");
exit();
?>
