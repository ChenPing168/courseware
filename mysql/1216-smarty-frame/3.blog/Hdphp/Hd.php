<?php 
class Hd{
	public static function run(){
		//创建文件夹
		self::createDir();
		//复制文件
		self::copyFile();
		//载入核心文件
		self::loadCore();
		//执行应用类
		\Hdphp\Lib\App::run();
	}
	//复制文件
	private static function copyFile(){
		//把提前准备好的控制器复制到App/Home/Controller文件夹，为了将来实例化
		copy('Hdphp/Common/IndexController.php', 'App/Home/Controller/IndexController.php');
	}
	
	//创建文件夹
	private static function createDir(){
		$dirs = array(
		'App/Home/Controller',
		'App/Home/View',
		);
		foreach ($dirs as $d) {
			is_dir($d) || mkdir($d,0777,true);
		}
	}
	
	//载入核心类
	private static function loadCore(){
		require './Hdphp/Lib/functions.php';
		require './Hdphp/Lib/App.php';
	}
	
	
	
}
Hd::run();



 ?>