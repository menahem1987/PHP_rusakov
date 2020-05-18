<?php
    $ip_adress = gethostbyname('shingen-zhuk.ru');
    echo $ip_adress, '<br/>';
    $hostname = gethostbyaddr($ip_adress);
    echo $hostname;
?>
