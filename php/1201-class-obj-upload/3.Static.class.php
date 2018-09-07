<?php 
class Model{
	//如果$link为null的时候，证明没有连接
	//声明为静态属性，为了把连接保存起来不丢失
	private static $link = NULL;
	public function __construct(){
		//第一次实例化：self::$link为null
		//第二次实例化：因为是静态属性，可以把上次连接好的保存起来，所以不为null了
		if(is_null(self::$link)){
			//调用连接方法
			$this->connect();
		}
	}
	//连接
	public function connect(){
		//连接成功
		self::$link = true;
		echo 'lian jie yi ci';
	}
}
//无论实例化多少次只被连接一次
//第一次实例化
$model = new Model;
//第二次实例化
$model = new Model;
$model = new Model;
$model = new Model;
$model = new Model;





