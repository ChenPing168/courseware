<?php 
header('Content-type:text/html;charset=utf-8');
class IndexController{
	//执行未定义方法的时候自动执行
	//$func（方法名称）,$params（方法里面的参数）
	public function __call($func,$params){
		echo "{$func}方法不存在";exit;
	}
	public function index(){
		echo '首页<br/>';
	}
	public function add(){
	    echo '添加<br/>';
	}
	public function del(){
	    echo '删除<br/>';
	}
}
//实例化控制器
$controller = new IndexController;
//动作，默认是index
$action = isset($_GET['a']) ? $_GET['a'] : 'index';
//执行控制器里面的不同的动作
$controller->$action();
 ?>
 <html>
 	<head>
 		<title></title>
 	</head>
 	<body>
 		<a href="10.MagicFunc.php">首页</a>
 		<a href="10.MagicFunc.php?a=add">添加</a>
 		<a href="10.MagicFunc.php?a=del">删除</a>
 	</body>
 </html>
 

