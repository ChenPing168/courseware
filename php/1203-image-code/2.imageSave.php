<?php 
//2.创建画布
$img = imagecreatetruecolor(500, 500);
//3.调色
$green = imagecolorallocate($img, 0, 255, 0);
//4.填充画板
imagefill($img, 0, 0, $green);
//5.作画

//6.输出图像,保存图像
imagepng($img,'./1.png');
//7.销毁资源
imagedestroy($img);









 ?>