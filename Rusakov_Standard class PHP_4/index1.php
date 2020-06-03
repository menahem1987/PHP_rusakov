<?php
    echo $pt = mt_rand(200000000, 2147483647), '<br/>';
    echo date('Y.m.d', $pt).'<br/>';
    echo $ptt = mt_rand(200000000, 2147483647), '<br/>';
    echo date('Y.m.d', $ptt).'<br/>';
    echo '<br/>';
    $date = new DateTime();
    echo $date -> format('Y.m.d').'<br/>';
    $date_1 = new DateTime(date('Y.m.d', $pt));
    $date_2 = new DateTime(date('Y.m.d', $ptt));
    echo '<br/>'.$date_1 -> format('Y.m.d').'<br/>';
    echo $date_2 -> format('Y.m.d').'<br/>';
    echo $d = "2123.25.29";
    $reg = '/^(\d{4})\.(\d{2})\.(\d{2})$/';
    echo preg_match($reg, $date_1 -> format('Y.m.d'), $matches_1);
    print_r($matches_1);
    preg_match($reg, $date_1 -> format('Y.m.d'), $matches_2);
    print_r($matches_2);
    echo '<br/>';
    echo $date_2->format('Y.m.d').'<br/>';
    $interval = $date_2->diff($date_1);
        print_r($interval);
    echo '<br/>';
    echo  $interval->s.'<br/>';
?>