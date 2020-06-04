<?php
    echo IntlChar::ord('N');
?>
<table>

        <?php
        $arr = ['A','B', 'C'];
        for ($i=0; $i<count($arr);$i++):?>
    <tr>
            <td><?=IntlChar::ord($arr[$i])?></td>
            <td><?=$arr[$i]?></td>
    </tr>
        <?php endfor?>

</table>
