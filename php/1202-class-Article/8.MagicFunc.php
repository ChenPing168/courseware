<?php 
header('Content-type:text/html;charset=utf-8');
class Model{
	//获取未定义属性，自动调用(作为了解)
	public function __get($var){
		echo $var . '属性没有'; 
	}
	
}
$model = new Model;
echo $model->type;


 ?>