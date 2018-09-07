<?php 
$dsn = "mysql:host=127.0.0.1;dbname=c58";
try {
	//通过pdo连接数据库
	$pdo = new Pdo($dsn,'root','');
	//把错误设置成异常模式，才能try catch接收
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//设置字符集
	$pdo->query("SET NAMES utf8");
	//开启事务
	$pdo->query("BEGIN");
	//关闭自动提交
	$pdo->query("SET AUTOCOMMIT=0");
	//转账
	//扣掉100
	$pdo->exec('UPDATE bank SET money=money-100 WHERE bid=1');
	//加上100
	$pdo->exec('UPDATE bank SET money=money+100 WHERE bid=2');
	//提交
	$pdo->query('COMMIT');
} catch (PDOException $e) {
	$pdo->query('ROLLBACK');
	echo $e->getMessage();
}







 ?>