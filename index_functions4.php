<?php
    $timeStart = microtime(true);
    echo $timeStart.'<br/>';
    for($i = 0; $i < 10**7; $i++);
    echo microtime(true) - $timeStart;
    echo '<br/>';
    echo time();
    echo '<br/>';
    echo $hertime = time() + mt_rand(1,10)*10000;
    echo '<br/>';
    echo date('Y.m.d');
    echo '<br/>';
    echo date('Y.m.d',$hertime);
    echo '<br/>';
    echo $tmtime = $hertime - time();
    echo '<br/>';
    echo date('h:i:s');
    echo '<br/>';
    $da = false;
print_r($_POST['select']);
$timeStart = microtime(true);
if ($_POST['select'] == "Москва"){$da = date('h:i:s');}
elseif ($_POST['select'] == "Лондон"){
    $timeStart = $timeStart - 10800;
    $da = date('h:i:s',$timeStart);}
    if ($_POST['select'] == "Нью-Йорк"){
        $timeStart = microtime(true);
        $timeStart = $timeStart + 32400;
    $da = date('h:i:s',$timeStart);
}
?>
<form name="myform" action="index.php" method="post">
    Город<p><select name="select" size="3">
            <option name="s1" value="Москва">Москва</option>
            <option name="s2" value="Лондон">Лондон</option>
            <option name="s3" value="Нью-Йорк">Нью-Йорк</option>
        </select></p>
    <input type="submit" value="btn"><br/><br/>
    Дата и время<input type="text" name="data" value="<?= $da?>">
</form>
