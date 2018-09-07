<?php
//更改session存放路径，默认是在wamp/tmp服务器目录
//session_save_path('./');
//更改session的名称，其实就是更改本地cookie的名字
//也可以获得session的名称 echo session_name();
session_name('hd');
//单入口文件
session_start();
include "../../functions.php";
//使用未找到的类，自动触发此函数，会把类名传入
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