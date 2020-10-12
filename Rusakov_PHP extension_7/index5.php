<?php
function shapeSpace_random_string($length) {

    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $strlength = strlen($characters);

    $random = '';

    for ($i = 0; $i < $length; $i++) {
        $random .= $characters[rand(0, $strlength - 1)];
    }
    return $random;

}
$im = imagecreatetruecolor(200, 70);

$text = shapeSpace_random_string(4);
imagettftext($im, rand(10, 20), rand(5, 90), rand(50, 100), rand(50, 50), imagecolorallocate($im, 255, 255, 0), 'D:\OSPanel\domains\mysite.local\anodyne.ttf', $text);
for ($i=0; $i<rand(10, 20); $i++){
    $i=$i++;
imagearc($im, rand(20,100), rand(20,100), rand(40,100), rand(40,100), rand(0,360), rand(0,360), imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255)) );}

header('Content-Type: image/png');
imagePng($im);
imageDestroy($im);
?>
