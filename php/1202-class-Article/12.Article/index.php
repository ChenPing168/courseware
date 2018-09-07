<?php 
include "../../functions.php";
function __autoload($cName){
	require "./{$cName}.class.php";
}
//载入数据库
$data = include "./data.php";
//实例化文章管理控制器，把数据库传给构造方法
$c = new ArcController($data);
//要执行的动作
$action = isset($_GET['a']) ? $_GET['a'] : 'index';
//执行动作
$c->$action();









