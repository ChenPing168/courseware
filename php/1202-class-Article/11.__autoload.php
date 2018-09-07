<?php 
//在使用未载入的类会自动的触发
//参数是类名
function __autoload($cName){
	include "./{$cName}.class.php";
}
$test = new Test1;
$test->index();

//$test = new Test2;
//$test->index();



 ?>