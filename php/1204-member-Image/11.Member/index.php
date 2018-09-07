<?php //单入口文件
session_start();
include "../../functions.php";
function __autoload($className){
	require "./{$className}.class.php";
}
//控制器名称
$c = isset($_GET['c']) ? $_GET['c'] : 'Index';
//实例化控制器 
$name = $c . 'Controller';
//$controller = new IndexController 
//$controller = new MemberController
$controller = new $name;
//方法
$action = isset($_GET['a']) ? $_GET['a'] : 'index';
//$controller->login();
$controller->$action();




 ?>