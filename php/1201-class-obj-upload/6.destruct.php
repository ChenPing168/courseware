<?php 
header('Content-type:text/html;charset=utf-8');
class Human{
	//构造方法
	public function __construct(){
		echo '我出生了<br/>';
	}
	public function run(){
		echo '执行<br/>';
	}
	//析构方法,在对象被销毁的时候自动执行
	public function __destruct(){
		echo '我消失了';
	}
}
$people = new Human;
$people->run();
echo 'test' . '<br/>';






 ?>