<?php
session_start();
$_SESSION['color123'] = $_POST['red1'];
$r = $_SESSION['color123'];
?>
<form style="background-color: <?= $r?>" name="her" method="post" action="index.php">
    <ul>
        <p style="color: yellow">Color <select name="red1">
                <option name="red" value="red">Красный</option>
                <option name="green" value="green">Зеленый</option>
                <option name="blue" value="blue">Синий</option>
            </select><br><br>
                <input type="submit" name="send" value="Color">
        </p>
    </ul>
</form>
