<?php
$a = [2,3,6,4,9];
print_r($a);
echo '<br/>';
print_r($a[mt_rand(0,4)]);
echo '<br/>';
shuffle($a);
print_r($a[mt_rand(0,4)]);
echo '<br/>';
$b = ['In'=>45, 'Hu'=>78, 'ju'=>23, 'ji'=>12, 'jt'=>23];
print_r($b);
echo '<br/>';
function mySort($t, $l){
    return($t<$l) ? -1: 1;
}
uasort($b, 'mySort');
print_r($b);
echo '<br/>';
?>
