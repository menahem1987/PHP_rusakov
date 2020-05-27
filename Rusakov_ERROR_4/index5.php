<?php
try {
    $x = 5 % 0;
} catch (Error $e){echo  $e->getMessage().'<br/>', $e->getLine().'<br/>', $e->getFile().'<br/>',$e->getTraceAsString();}
?>
