<?php 
//水印生成*********
//打开目标图(大图，shanghai.jpg)
$dstImg = imagecreatefromjpeg('./shanghai.jpg');
//获得宽高
$dstW = imagesx($dstImg);
$dstH = imagesy($dstImg);

//打开源图（小图,logo.png）
$srcImg = imagecreatefrompng('./logo.png');
//获得宽高
$srcW = imagesx($srcImg);
$srcH = imagesy($srcImg);

//算出logo在大图上的位置坐标
$dstX = $dstW - $srcW;
$dstY = $dstH - $srcH;

//把水印贴到大图上去
//imagecopy($dstImg, $srcImg, $dstX, $dstY, 0, 0, $srcW, $srcH);
//可以设置透明度
imagecopymerge($dstImg, $srcImg, $dstX, $dstY, 0, 0, $srcW, $srcH, 20);
//保存水印图
imagejpeg($dstImg,'./shanghai_water.jpg');
//释放资源
imagedestroy($dstImg);
imagedestroy($srcImg);






