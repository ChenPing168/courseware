<?php 
// 创建一个检测文件扩展名是否为图片的函数
function checkImg($file){
	//1.获得类型 strrchr()
	$type = strrchr($file, '.');
	//2.检测类型是不是图片 in_array()
	return in_array($type, array('.jpg','.png','.gif'));
}

// $bool = checkImg('2.1.jpg');
$bool = checkImg('1.doc');
var_dump($bool);

 ?>