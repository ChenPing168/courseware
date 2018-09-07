<?php 
////phpinfo();
////如果有GD库，证明我们可以处理图像了
//$bool = extension_loaded('GD');
//var_dump($bool);
//1.告诉浏览器，这个文件是图像png类型
header('Content-type:image/png');
//2.创建画布
$img = imagecreatetruecolor(500, 500);
//3.调色
$green = imagecolorallocate($img, 0, 255, 0);
//4.填充画板
imagefill($img, 0, 0, $green);
//5.作画

//6.输出图像
imagepng($img);
//7.销毁资源
imagedestroy($img);









 ?>