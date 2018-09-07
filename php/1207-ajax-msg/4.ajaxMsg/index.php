<?php 
function __autoload($cName){
	require "./{$cName}.class.php";
}
//控制器
$c = isset($_GET['c']) ? $_GET['c'] : 'Index';
$controller = $c . 'Controller';
$obj = new $controller;
//方法
$a = isset($_GET['a']) ? $_GET['a'] : 'index';
$obj->$a();



 ?>