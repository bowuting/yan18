<?php

/*
  画图，矩形 椭圆 圆弧

*/

//画布
$im = imagecreatetruecolor(800,600);
$gray = imagecolorallocate($im,200,200,200);
$blue = imagecolorallocate($im,0,0,255);

imagefill($im,0,0,$gray);


header('content-type: image/png');
imagepng($im);

imagedestroy($im);


 ?>
