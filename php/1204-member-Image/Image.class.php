<?php 
class Image{
	public function water($img,$logoImg){
		
	}
	
	public function thumb($img,$width,$height){
		
	}
}

$img = new Image;
//水印
$img->water('./shanghai.jpg','./logo.png');
//缩略
$img->thumb('./shanghai.jpg', 200, 50);










 ?>