<?php 
class Model{
	private $link = true;
	//外面用unset删除私有属性的时候，自动触发
	//自动传入要检测的属性的名称（作为了解）
	public function __unset($var){
		unset($this->$var);
	}
}
$model = new Model;
//外部删除私有变量
unset($model->link);


 ?>