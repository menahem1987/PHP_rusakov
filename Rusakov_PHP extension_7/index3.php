<?php
    $da = getimagesize('a.jpg');
    $im = imagecreatefromjpeg('a.jpg');
    header('Content-Type:image/jpeg');
    imagejpeg($im);

    print_r($da);
    echo '<br>';
    print imagesx($im);
    echo '<br>';
    print imagesy($im);
    imagedestroy($im);
?>
