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
	//PDO连接报错就是异常错误
	$pdo = new Pdo($dsn,$username,$password);
	//设置字符集
	$pdo->query("SET NAMES UTF8");
	//获取结果集对象
	$result = $pdo->query("SELECT * FROM arc");
	//获取数据
	//fetchAll是获得所有
	//fetch是获得一条
	$data = $result->fetchAll(PDO::FETCH_ASSOC);
	print_r($data);
}catch(PDOException $e){
	//catch可以捕获try里面的错误，然后自定义样式
	//返回异常的错误信息
	//$e->errorCode 获取错误的编码
	//$e->getMessage 获取错误的信息
	echo '<h2 style="color:red">' . $e->getMessage() . '</h2>';
}








 ?>