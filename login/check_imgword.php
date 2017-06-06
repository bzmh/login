<?php
header ( "Content-type: text/html; charset=UTF-8" ); 
header("Content-type:image/gif");      //设置页面类型
$image = imagecreatetruecolor(80, 30);  //创建画布
//$font = 'Font/FZHCJW.TIF';              //字体*************不明错误***************
$font = 'Font/FZHCJW.TTF';              //字体
$bg = imagecolorallocate($image, 255, 255, 255);
$color = imagecolorallocate($image, 255, 0, 255);
imagettftext($image, 20, 0, 8, 20, $color, $font, "mrsoft");
imagegif($image);
?>

