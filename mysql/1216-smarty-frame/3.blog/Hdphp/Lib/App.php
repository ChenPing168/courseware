<?php namespace Hdphp\Lib;
class App{
	//APP类开始执行
	public static function run(){

		//注册一个自动载入方法
		spl_autoload_register(array(__CLASS__,'auto'));
		//执行应用
		self::appRun();
	}
	
	//自动载入函数
	//如果有未找到的类，会自动触发，会把类名传入
	private static function auto($cName){
		//$cName目前是这样：Home\Controller\IndexController
		$path = "App/" . str_replace('\\', '/', $cName) . '.php';
		require $path;
	}
	
	//执行应用
	private static function appRun(){
		$obj = new \Home\Controller\IndexController;
		$obj->index();
	}
	
}










 ?>