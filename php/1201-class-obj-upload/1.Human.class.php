<?php
include "../functions.php"; 
//声明一个类
//人类
class Human{
	//类的属性(类的变量)
	//名字
	public $name;
	//性别
	public $sex;
	//年龄
	public $age;
	//眼睛
	public $eyes;
	//头发
	public $hair;
	//构造方法，固定写法，在实例化的时候，自动运行
	public function __construct(){
	 	echo '我是自动运行的<br/>';
	}
	
	//类的方法(类的函数)
	public function run(){
		echo '跑';
	}
	
	public function talk(){
		echo '说';
	}
	
	public function show(){
		echo "我的名字叫：" . $this->name . '<br/>';
		echo "我的性别是：" . $this->sex . '<br/>';
		echo "我的眼睛是：" . $this->eyes . '<br/>';
		echo "我的头发是：" . $this->hair . '<br/>';
	}
	
}

////实例化对象 new就是实例化
$lu = new Human;
$lu->name = '路庆生';
$lu->sex = '男';
$lu->eyes = '红色';
$lu->hair = '绿色';
//调取run方法
//$people->run();
$lu->show();

//实例化对象
$xing = new Human;
$xing->name = '邢志龙';
$xing->sex = '男';
$xing->eyes = '白色';
$xing->hair = '没有';
$xing->show();







 ?>







