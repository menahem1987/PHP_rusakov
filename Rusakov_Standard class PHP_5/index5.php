<?php
    function test($start, $to, $step){
        for ($i = $start; $i<$to; $i++){
            yield $i;
        }
    }
    $t = test(1,5, 2);
    print_r($t);
    echo '<br>';
    while ($t->valid()){
        echo $t->current().';';
        $t->send(2);
        $t->next();
    }
?>
