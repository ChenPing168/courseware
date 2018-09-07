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
		//模块名字处理**
		$m = isset($_GET['m']) ? ucfirst($_GET['m']) : 'Home';
		define('MODULE', $m);
		//控制器名字处理**
		$c = isset($_GET['c']) ? ucfirst($_GET['c']) : 'Index';
		define('CONTROLLER', $c);
		//方法名字处理**
		$a = isset($_GET['a']) ? $_GET['a'] : 'index';
		define('ACTION', $a);
		//加载系统配置项
		$sysConfig = include 'Hdphp/config.php';
		C($sysConfig);
		//加载公共的配置项
		$commonConfig = include 'App/Common/Config/config.php';
		C($commonConfig);
		//加载用户配置项
		$userConfig = include 'App/' . MODULE . '/Config/config.php';
		C($userConfig);
		
		//如果开启过session则不用重复开启
		//因为有了session_id就是已经开启了
		session_id() || session_start();
		//设置时区
		date_default_timezone_set(C('TIMEZONE'));
	}
	
	
	//自动载入函数
	//如果使用未找到的类，会自动触发，会把类名传入
	private static function auto($cName){
		//如果是控制器
		if(substr($cName, -10) == 'Controller'){
			//$cName目前是这样：Home\Controller\IndexController
			$path = "App/" . str_replace('\\', '/', $cName) . '.php';
		}else{//如果是工具类的时候
			//$cName是这个样子：Hdphp\Tool\Code
			$path = str_replace('\\', '/', $cName) . '.php';
		}
		//如果类文件不存在
		if(!is_file($path)){
			halt('文件' . $path . '不存在');
		}
		//载入
		require $path;
	}
	
	//执行应用
	private static function appRun(){
		$m = MODULE;
		$c = CONTROLLER;
		$a = ACTION;
		//实例化控制器
		$name = "\\{$m}\Controller\\{$c}Controller";
		header('Content-type:text/html;charset=utf-8');
		$obj = new $name;
		//执行方法
		$obj->$a();
	}
	
}










 ?>