<?php
header ( "Content-type: text/html; charset=UTF-8" ); 
header("Content-type:image/gif");      //����ҳ������
$image = imagecreatetruecolor(80, 30);  //��������
//$font = 'Font/FZHCJW.TIF';              //����*************��������***************
$font = 'Font/FZHCJW.TTF';              //����
$bg = imagecolorallocate($image, 255, 255, 255);
$color = imagecolorallocate($image, 255, 0, 255);
imagettftext($image, 20, 0, 8, 20, $color, $font, "mrsoft");
imagegif($image);
?>

