<?php namespace Hdphp\Lib;
class App{
	//APP类开始执行
	public static function run(){
		//初始化设置
		self::init();
		//注册一个自动载入方法
		spl_autoload_register(array(__CLASS__,'auto'));
		//执行应用
		self::appRun();
	}
	
	private static function init(){
		//如果开启过session则不用重复开启
		//因为有了session_id就是已经开启了
		session_id() || session_start();
		//设置时区
		date_default_timezone_set('PRC');
	}
	
	
	//自动载入函数
	//如果有未找到的类，会自动触发，会把类名传入
	private static function auto($cName){
		//如果是控制器
		if(substr($cName, -10) == 'Controller'){
			//$cName目前是这样：Home\Controller\IndexController
			$path = "App/" . str_replace('\\', '/', $cName) . '.php';
		}else{//如果是工具类的时候
			//$cName是这个样子：Hdphp\Tool\Code
			$path = str_replace('\\', '/', $cName) . '.php';
		}
		require $path;
	}
	
	//执行应用
	private static function appRun(){
		//实例化控制器
		$obj = new \Home\Controller\IndexController;
		$a = isset($_GET['a']) ? $_GET['a'] : 'index';
		//执行方法
		$obj->$a();
	}
	
}










 ?>