<?php
session_start();
$rand = mt_rand(1000, 9999);
$img = imagecreatetruecolor(300, 100);
$_SESSION["rand"] = $rand;
$color = imageColorAllocate($img, 255, 255, 255);
$font = 'C:\Users\Public\Programm\open_server\OSPanel\domains\blueasy\fonts\SegoeUI.ttf';
$font = mb_convert_encoding($font, 'big5', 'utf-8');
imagefttext($img, 20, -10, 10, 30, $color,$font, $rand);
header("Content-Type: image/png");
imagePng($img) or die('imagepng error!');;
imageDestroy($img);
?>