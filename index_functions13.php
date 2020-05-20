<?php
$reg = "/<a href='([a-zA-Z0-9]*\.[a-zA-Z0-9]{1,5})'(.*?)<\/a>/";
$text = "Эники беники ели <a href='a12fd.txt'>Первая ссылка</a> Эники-беники — <a href='L.txt'>Вторая ссылка</a>";
echo preg_match_all($reg, $text, $matches);
echo '<br/>';
$text = preg_replace($reg, "«Ссылки запрещены»", $text);
echo $text;
?>
