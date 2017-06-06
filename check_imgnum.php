<?php

header("Content-type:text/html;charst:utf-8");
header("Content-type:image/gif");       //设置页面类型
$image = imagecreatetruecolor(80, 30);  //创建画布
$font = "Font/FZHCJW.TIF";              //字体
$bg = imagecolorallocate($image, 255, 255, 255);
$color = imagecolorallocate($image, 255, 0, 255);
for($b = 0; $b < 4;$b++){
    $a = rand(1, 9);
}
imagestring($image, 3, 8, 5, $a, $color);
imagegif($image);
?>