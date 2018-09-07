<?php 
header('Content-type:text/html;charset=utf-8');
//dsn的信息******
//使用mysql驱动，
//主机为：127.0.0.1
//数据库名称：c58
$dsn = 'mysql:host=127.0.0.1;dbname=c58';
$username = 'root';
$password = '';
//try里面的发生异常错误，都会被catch捕获到
try{
	//PDO连接报错本身就是异常错误
	$pdo = new Pdo($dsn,$username,$password);
	//设置错误类型(把错误类型设置成异常错误，因为catch接的就是异常错误)
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//设置字符集
	$pdo->query("SET NAMES UTF8");
	
	
}catch(PDOException $e){

	echo '<h2 style="color:red">' . $e->getMessage() . '</h2>';
}








 ?>