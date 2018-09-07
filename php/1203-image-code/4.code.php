<?php 
//1.告诉浏览器，这个文件是图像png类型
header('Content-type:image/png');
//2.创建画布
$img = imagecreatetruecolor(200, 80);
//3.调色 #FFFFFF
//$white = imagecolorallocate($img, 255, 255, 255);
//把16进制颜色转为10进制颜色
$white = hexdec('#FFFFFF');
//4.填充画板
imagefill($img, 0, 0, $white);
//验证码的种子
$seed = '1234567890qwertyuiopasdfghjklzxcvbnm';
$str = '';
//写4位的验证码
for ($i=0; $i < 4; $i++) { 
	//字体的y坐标 (画布高度+字体高度) / 2
	$y = (80 + 40) / 2;
	//字体的x坐标 (画布宽度/验证码的长度) * $i
	$x = (200 / 4) * $i + 10;
	//要写的验证码
	$text = $seed[mt_rand(0, strlen($seed) - 1)];
	$str .= $text;
	$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	imagettftext($img, 40, mt_rand(-45, 45), $x, $y, $color, './font.ttf', $text);
}
//把生成好的验证码写入codeStr.php文件
file_put_contents('./codeStr.php', "<?php return '" . $str . "' ?>");
//绘制干扰
//线
for ($i=0; $i < 5; $i++) {
	$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	imageline($img, mt_rand(0, 200), mt_rand(0, 80), mt_rand(0, 200), mt_rand(0, 80), $color);
}
//圆
for ($i=0; $i < 10; $i++) {
	$wh = mt_rand(0, 20); 
	$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	imageellipse($img, mt_rand(0, 200), mt_rand(0, 80), $wh, $wh, $color);
}


//6.输出图像
imagepng($img);
//7.销毁资源
imagedestroy($img);









 ?>