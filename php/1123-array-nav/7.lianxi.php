<?php 
include "../functions.php";
// 创建递归函数完成多维数组key的大小写转换,弥补 array_change_key_case函数功能的不足。
$a = array(
	'c' => 'c',
	'd' => array('e'=>'e')
);

function changeCase($arr){
	//先转一层大写
	$arr = array_change_key_case($arr,CASE_UPPER);
	//遍历键名转为大写的数组
	foreach ($arr as $k => $v) {
		if(is_array($v)){
			//$arr['D'] = array('E'=>'e')
			$arr[$k] = changeCase($v);
		}
	}
	return $arr;
}

$newArr = changeCase($a);
p($newArr);



 ?>