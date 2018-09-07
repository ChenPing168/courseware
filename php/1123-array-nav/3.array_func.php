<?php 
include "../functions.php";
/*$arr = array('a','b','c');
//获得数组的键名
echo key($arr);
next($arr);
echo key($arr);
next($arr);
echo key($arr);
next($arr);
//移动到没有键名的时候返回null
var_dump(key($arr));

//获得数组的键值
// echo current($arr);*/


/*$arr = array('a','b',array('c','d'));
//统计数组中的单元个数
echo count($arr);*/


/*$typeArr = array('jpg','png','bmp');
$type = 'jpg';
//判断一个单元在不在数组中
$bool = in_array($type, $typeArr);
if($bool){
	echo '上传成功';
}else{
	echo '您上传的类型不允许，请重新上传';
}*/



/*$arr = array('a','b','c');
//在指定的数组里面搜索是否有这个键名
$bool = array_key_exists(2, $arr);
var_dump($bool);*/



/*$arr = array('yule','tiyu','bingdu');
//过滤数组（不作为重点）
$newArr = array_filter($arr,'fc');
function fc($v){
	if($v == 'bingdu'){
		//原数组当前单元就会被过滤掉（删掉）
		return false;
	}
	//其他单元可以保留
	return true;
}
p($newArr);*/


/*//array_map例子1
$arr = array('1',0,'100','1中国');
//将回调函数作用到给定数组的单元上(不作为重点)
$newArr = array_map('func', $arr);
function func($v){
	//把每一个单元强制转整，然后反出到新数组
	return (int)$v;
}
var_dump($arr);
echo '<hr/>';
var_dump($newArr);
*/


//array_map例子2
/*$a1=array("Horse","Dog","Cat");
$a2=array("Cow","Dog","Rat");

$newArr = array_map('func', $a1,$a2);
function func($v1,$v2){
	if($v1 == $v2){
		return 'yiyang';
	}else{
		return 'buyiyang';
	}
}
p($newArr);*/



















































 ?>