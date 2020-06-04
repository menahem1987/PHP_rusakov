<?php
    $dir = dir('D:\OSPanel\domains');
    print_r($dir);
    echo '<br>';
    function Dirr($dir){
    if (($file = $dir->read())==false) return ''.'<br>';
        return $file.'<br/>'.Dirr($dir);
        $dir->close();
    }
    echo Dirr($dir);
?>
