<?php

header("Content-type:text/html;charst:utf-8");
header("Content-type:image/gif");       //����ҳ������
$image = imagecreatetruecolor(80, 30);  //��������
$font = "Font/FZHCJW.TIF";              //����
$bg = imagecolorallocate($image, 255, 255, 255);
$color = imagecolorallocate($image, 255, 0, 255);
for($b = 0; $b < 4;$b++){
    $a = rand(1, 9);
}
imagestring($image, 3, 8, 5, $a, $color);
imagegif($image);
?>