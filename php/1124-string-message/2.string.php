<?php 
/*$str = 'AbcAcda';
//把大写A换成-
// echo str_replace('A', '-', $str);
//把大写A和小写c换成-
// echo str_replace(array('A','c'), '-', $str);
//把大写A换成|，小写c换成-
// echo str_replace(array('A','c'), array('|','-'), $str);

//不区分大小写搜索替换
echo str_ireplace('a', '-', $str);*/


//把以下路径替换成'./Upload/2015/1_thumb.jpg';
$str1 = './Upload/2015/1.jpg';
$str2 = './Upload/2015/2.png';
$str3 = './Upload/2015/abc.gif';

function changePath($path){
	//获得类型 .jpg
	$type = strrchr($path, '.');
	//搜索.jpg 替换成 _thumb.jpg
	return str_replace($type, '_thumb' . $type, $path);
}
$newStr = changePath($str2);
echo $newStr;

















 ?>