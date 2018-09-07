<?php 
class Model{
	private $link = true;
	//外面用isset检测私有属性的时候，自动触发
	//自动传入要检测的属性的名称（作为了解）
	public function __isset($var){
		return isset($this->$var);
	}
}
$model = new Model;
//外部检测私有变量
$bool = isset($model->link);
var_dump($bool);


 ?>