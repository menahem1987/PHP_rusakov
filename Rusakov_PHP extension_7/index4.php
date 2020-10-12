<?php
class Im{
    function GetcolKv($im, $x1, $y1, $x2, $y2, $color){
        imagefilledrectangle($im, $x1, $y1, $x2, $y2, $color);
    }
    function GetcoLi($im, $x1, $y1, $x2, $y2, $color){
        imageline($im, $x1, $y1, $x2, $y2, $color);;
    }
    function GetcoKr($im, $x1, $y1, $x2, $y2, $st, $en, $color){
        imagearc($im, $x1, $y1, $x2, $y2, $st, $en, $color);;
    }
}
    $im = imagecreatetruecolor(500, 500);
    $color = imagecolorallocate($im, 100, 150, 0);
    $imm = new Im();
    $imm->GetcolKv($im, 200, 100, 250, 200, $color);
    $imm->GetcolKv($im, 180, 100, 200, 130, imagecolorallocate($im, 255, 0, 0));
    $imm->GetcolKv($im, 250, 100, 270, 130, imagecolorallocate($im, 255, 0, 0));

    $imm->GetcoLi($im, 220, 100, 220, 80, $color);
    $imm->GetcoLi($im, 230, 100, 230, 80, $color);
    $imm->GetcoLi($im, 230, 100, 230, 80, $color);
    $imm->GetcoLi($im, 190, 130, 190, 200, $color);
    $imm->GetcoLi($im, 260, 130, 260, 200, $color);
    $imm->GetcoLi($im, 210, 200, 210, 250, $color);
    $imm->GetcoLi($im, 240, 200, 240, 250, $color);
    $imm->GetcoLi($im, 225, 55, 225, 60, $color);
    $imm->GetcoKr($im, 225,55, 50, 50, 0, 360, $color);
    $imm->GetcoKr($im, 235,55, 10, 10, 0, 360, $color);
    $imm->GetcoKr($im, 215,55, 10, 10, 0, 360, $color);
    $imm->GetcoKr($im, 225,65, 10, 10, 0, 180, $color);
    $imm->GetcoKr($im, 225,65, 10, 10, 0, 180, $color);
    $imm->GetcoKr($im, 200,55, 10, 10, 80, 260, $color);
    $imm->GetcoKr($im, 250,55, 10, 10, 260, 80, $color);

    imageFill($im, 225, 65, imageColorAllocate($im, 255, 255, 255));
    header('Content-Type: image/png');
    imagepng($im);
    imagepng($im, 't.png');
    imagedestroy($im);
?>
