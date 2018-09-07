<?php 
header('Content-type:text/html;charset=utf-8');
//接口类（作为了解）
interface DbInterface{
	//下面两个方法必须重写
	public function connect();
	public function query($sql);
}
//子类通过implements来实现父类
class DbMysqli implements DbInterface{
	public function connect(){
		echo '通过mysqli的方式连接';
	}
	public function query($sql){
	    echo '查询' . $sql;
	}
	
}
$db = new DbMysqli;
//$db->connect();
//$db->query("SELECT * FROM stu");






 ?>