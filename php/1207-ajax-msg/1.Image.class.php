<?php 
//图像处理类
class Image{
	public function water($img,$logoImg,$pos=9){
		//目标图（大图）处理***********
		$dType = ltrim(strrchr($img, '.'),'.');
		//把后缀转为小写，因为有的时候图片的名字有可能是大写的
		$dType = strtolower($dType);
		if($dType == 'jpg') $dType = 'jpeg';	
		$fn = "imagecreatefrom{$dType}";
		$dstImg = $fn($img);
		//目标图宽高
		$dW = imagesx($dstImg);
		$dH = imagesy($dstImg);
		//源图（logo）处理************
		$type = ltrim(strrchr($logoImg, '.'),'.');
		$type = strtolower($type);
		if($type == 'jpg') $type = 'jpeg';
		$fn = "imagecreatefrom{$type}";
		$srcImg = $fn($logoImg); 
		//源图宽高
		$sW = imagesx($srcImg);
		$sH = imagesy($srcImg);
		
		//计算logo在大图的位置
		switch ($pos) {
			case 1:
				$dstX = 20;
				$dstY = 20;
				break;
			case 2:
				$dstX = ($dW - $sW) / 2;
				$dstY = 20;
				break;
			case 5:
				$dstX = ($dW - $sW) / 2;
				$dstY = ($dH - $sH) / 2;
				break;
			case 9:
				$dstX = $dW - $sW - 20;
				$dstY = $dH - $sH - 20;
				break;
			
			default:
				$dstX = mt_rand(0, $dW - $sW);
				$dstY = mt_rand(0, $dH - $sH);
				break;
		}
		//加盖水印
		imagecopy($dstImg, $srcImg, $dstX, $dstY, 0, 0, $sW, $sH);
		//保存
		$fn = "image{$dType}";
		//.jpg
		$type = strrchr($img, '.');
		//./shanghai_water.jpg
		$path = str_replace($type, '_water' . $type, $img);
		$fn($dstImg,$path);
		//销毁
		imagedestroy($dstImg);
		imagedestroy($srcImg);
		return $path;
	}
	
	public function thumb($img,$width,$height){
		//目标图（画布）**************
		$dstImg = imagecreatetruecolor($width, $height);
		//源图****************
		$type = ltrim(strrchr($img, '.'),'.');
		$type = strtolower($type);
		if($type == 'jpg') $type = 'jpeg';
		$fn = "imagecreatefrom{$type}";
		$srcImg = $fn($img); 
		//源图宽高
		$sW = imagesx($srcImg);
		$sH = imagesy($srcImg);
		//缩略
		imagecopyresized($dstImg, $srcImg, 0, 0, 0, 0, $width, $height, $sW, $sH);
		//保存
		$fn = 'image' . $type;
		//.jpg
		$t = strrchr($img, '.');
		$path = str_replace($t, '_thumb' . $t, $img);
		$fn($dstImg,$path);
		//销毁
		imagedestroy($dstImg);
		imagedestroy($srcImg);
		//返回缩略路径
		return $path;
	}
}

$img = new Image;
////水印，返回加完水印图片的地址
//$path = $img->water('./shanghai.JPG','./logo.png',10);
//echo $path;
//缩略
$img->thumb('./shanghai.jpg', 100, 20);










 ?>