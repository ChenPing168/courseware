<?php 
include "../functions.php";
/*$arr = array('A'=>'a','B'=>'b','C'=>'c');
//返回数组中的所有的键名
$keys = array_keys($arr);
p($keys);*/

/*//返回数组中的所有的键值
$arr = array('A'=>'a','B'=>'b','C'=>'c');
$values = array_values($arr);
p($values);*/



//1.关联数组合并
/*$userConf = array(
	'CODE_LEN' => 10
);
$sysConf = array(
	'CODE_LEN' => 4,
	'CODE_COLOR' => '#f00',
	'DB_NAME'=>'blog'
);
//1.关联数组合并，相同键名会覆盖
//2.后面的参数优先级更高
$conf = array_merge($sysConf,$userConf);
p($conf);*/

/*
//2.索引数组合并
$arr1 = array('a','b','c');
$arr2 = array('b','c');
//索引数组直接追加，不会覆盖
$arr = array_merge($arr1,$arr2);
p($arr);*/


/*$arr = array(
	'a' => 'a',
	'b' => 'b',
	'c' => 'c'
);
//把键名转为大写(CASE_UPPER)或者是小写(默认 CASE_LOWER)
$newArr = array_change_key_case($arr,CASE_LOWER);
p($newArr);*/


$arr = array(
	'c' => 'c',
	'd' => array('e'=>'e')
);
//只能转换一层的大写
$newArr = array_change_key_case($arr,CASE_UPPER);
//把'D'下标没有转的覆盖成大写array('E'=>'e')
$newArr['D'] = array('E'=>'e');
p($newArr);




















 ?>