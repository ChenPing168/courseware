<?php 
/*$arr = array('a','b','c');
var_dump($arr);
echo '<hr/>';
print_r($arr);
echo '<hr/>';
//打印的合法的php代码
var_export($arr);*/


//如果传递第二个参数 true，那么就会返回给变量，不会直接打印
$arr = array('a','b','c');
$data = var_export($arr,true);









 ?>