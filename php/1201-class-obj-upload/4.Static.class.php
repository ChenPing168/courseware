<?php 
header('Content-type:text/html;charset=utf-8');
class App{
	public static $var = '变量';
	//静态调用是不会执行构造方法
	public function __construct(){
		echo '我是自动的<br/>';
	}
	public static function run(){
		echo '运行';
		//在静态方法里面不能通过$this来调取方法，因为没有对象
		//以下代码会报错
		//$this->show();
	}
	public function show(){
		echo '显示';
	}
}
//App::run();
//echo App::$var;
class Application extends App{
	public static function getRun(){
		//调用父类的静态方法
		echo parent::run();
	}
}
Application::getRun();


//调用静态
//在类的内部 self::
//在类的外部 类名::
//在子类     parent::

//调用非静态方法
//在类的内部 $this->
//在类的外部 $obj->
//在子类     $this->




 ?>