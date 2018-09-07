<?php 
//1.告诉浏览器，这个文件是图像png类型
header('Content-type:image/png');
//2.创建画布
$img = imagecreatetruecolor(500, 500);
//3.调色
$green = imagecolorallocate($img, 0, 255, 0);
//4.填充画板
imagefill($img, 0, 0, $green);
//5.作画
//(1)矩形
$red = imagecolorallocate($img, 255, 0, 0);
//空心
imagerectangle($img, 20, 20, 480, 480, $red);
//实心
imagefilledrectangle($img, 40, 40, 460, 460, $red);
//(2)圆
$blue = imagecolorallocate($img, 0, 0, 255);
imageellipse($img, 250, 250, 400, 400, $blue);
imagefilledellipse($img, 250, 250, 300, 300, $blue);
//(3)线
$yellow = imagecolorallocate($img, 255, 255, 0);
imageline($img, 0, 250, 500, 250, $yellow);
imageline($img, 250, 0, 250, 500, $yellow);
//(4)点
for($i = 0; $i < 100000; $i++){
	$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	imagesetpixel($img, mt_rand(0, 500), mt_rand(0, 500), $color);
}

//6.输出图像
imagepng($img);
//7.销毁资源
imagedestroy($img);









 ?>