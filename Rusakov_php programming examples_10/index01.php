<?php
    if (isset($_POST['upload'])){
        $blacklist = ['.php', '.phtml', '.php3', '.php4', '.html', '.htm'];
        foreach ($blacklist as $i){
        if(preg_match("/$i$/", $_FILES['mp']['name'])){exit('Не верное расширение файла!');}
            }
        $type = $_FILES['mp']['type'];
        if ($type == 'audio/mp3'){}
        else exit('Неверный тип файла');

        $upload = "mp3/".$_FILES["mp"]["name"];
        move_uploaded_file($_FILES["mp"]["tmp_name"], $upload);
    }
?>
<form name="upload" action="index.php" method="post" enctype="multipart/form-data">
    <p>
        <input type="file" name="mp">
    </p>
    <p>
        <input type="submit" name="upload" value="Отправить">
    </p>
</form>
<?php
$dir = "mp3"; // Директория с mp3-файлами
$files = glob("$dir/*.mp3"); // Получаем список mp3-файлов
for ($i = 0; $i < count($files); $i++) {
    echo "<p>".basename($files[$i])."</p>"; // Выводим название файла
    echo "<audio controls='controls'>"; // Выводим тег аудио с панелью управления
    echo "<source type='audio/mpeg' src='".$files[$i]."' />"; // Подключаем путь к аудио-файлу
    echo "</audio>"; // Закрываем тег
    echo "<br /><br />"; // Переходим на 2 перехода на новую строку
}
?>
