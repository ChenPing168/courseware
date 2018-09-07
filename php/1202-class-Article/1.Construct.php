<?php 
class Model{
	public function __construct(){
		echo 'model';
	}
}
class SonModel extends Model{
	public function index(){
		echo 'index';
	}
}
//当子类实例化的时候，如果父类有构造方法，那么会自动执行
$sonModel = new SonModel;






 ?>