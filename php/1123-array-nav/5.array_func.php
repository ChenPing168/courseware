<?php 
include "../functions.php";
/*//在末尾追加方法1：
$arr = array('a','b','c');
//在末尾追加一个新的单元
array_push($arr, 'd');
//也可以在末尾追加多个新的单元
// array_push($arr, 'd','e','f');
p($arr);*/

//在末尾追加方法2：
/*$arr = array('a','b','c');
$arr[] = 'd';
p($arr);*/


//1.矮穷挫加入到了高富帅和白富美的生活中
$arr = array('白富美','高富帅');
array_push($arr, '矮穷挫');


//2.将数组最后一个单元弹出
//矮穷挫被踢走了
array_pop($arr);


//3.将数组开头的单元移出数组
//只剩白富美了
array_shift($arr);


//4.在数组开头插入一个或多个单元
//END 白富美和矮穷挫幸福的生活在了一起
array_unshift($arr, '矮穷挫');
p($arr);










 ?>