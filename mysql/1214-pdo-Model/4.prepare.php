<?php 
//1.多条重复语句执行，预准备只解析一次，所以更快
//2.因为先解析sql语句，再绑定参数，两个步骤分开，所以更加安全

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
	//开始预准备
	//返回预准备对象
	$sth = $pdo->prepare("SELECT * FROM arc WHERE aid=? AND t=?");
	//定义参数
	$aid = 3;
	$t = '科比';
	//绑定第一个参数为整数类型
	$sth->bindParam(1,$aid,PDO::PARAM_INT);
	//绑定第二个参数为字符串类型
	$sth->bindParam(2,$t,PDO::PARAM_STR);
	//执行
	$sth->execute();
	//返回全部结果
	$data = $sth->fetchAll(PDO::FETCH_ASSOC);
	print_r($data);

	
}catch(PDOException $e){
	//输出错误
	echo '<h2 style="color:red">' . $e->getMessage() . '</h2>';
}








 ?>


 ?>