<?php 
//缩略图处理******
//目标图（画布）
$dstImg = imagecreatetruecolor(300, 100);
//源图（大图）
$srcImg = imagecreatefromjpeg('./shanghai.jpg');
//获得宽高
$srcW = imagesx($srcImg);
$srcH = imagesy($srcImg);
//缩略
imagecopyresized($dstImg, $srcImg, 0, 0, 0, 0, 300, 100, $srcW, $srcH);
imagejpeg($dstImg,'./shanghai_thumb.jpg');




