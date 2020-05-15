<?php
    $x = false;
    if (isset($_POST['bt1'])){
        $x = $_POST['tx'];
    $fi1 = fopen('fi1.txt', 'a+');
    fwrite($fi1, $x);
    echo 'Сохранение прошло успешно';
    fclose($fi1);
    }
    if (isset($_POST['bt2'])){
        if (file_exists('fi1.txt')){
            echo "Файл существует";
    $fi1 = fopen('fi1.txt', 'a+');
    $x = fread($fi1, filesize('fi1.txt'));
    fclose($fi1);
        }
        else echo 'Файл не существует';
    }
    if (isset($_POST['bt3'])){
    if (file_exists('fi1.txt')){
        echo "Файл существует";
        unlink("fi1.txt");
    }
    else echo 'Файл не существует';
}
?>
<form name="myform" method="post" action="index.php">
    <input type="text" name="tx" value="<?=$x?>">
    <input type="submit" name="bt1" value="Сохранить"/>
    <input type="submit" name="bt2" value="Загрузить">
    <input type="submit" name="bt3" value="Удалить">
</form>

