<?php 
header('Content-type:text/html;charset=utf-8');
class Model{
	//设置未定义属性，自动调用（作为了解）
	public function __set($var,$value){
		//让以后所有的值都自动转整
		$this->$var = (int)$value;
	}
	
}
$model = new Model;
$model->type = '123';
var_dump($model->type);


 ?>