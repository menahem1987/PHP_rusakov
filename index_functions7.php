<?php
$f = fopen(__FILE__, 'r');
if (!flock($f, LOCK_EX | LOCK_NB)){
    die('Script is already running');
}
    echo fileowner("a.txt").'<br/>';
    echo filegroup("a.txt").'<br/>';
    echo decoct(fileperms("a.txt"));


    chown('a.txt', 100);
    chmod('a.txt', 0755);
    //for($i=0;$i<1000000000;$i++);
    sleep(20);
?>
