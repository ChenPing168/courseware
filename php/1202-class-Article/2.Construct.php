<?php 
class Model{
	public function __construct(){
		echo 'model<br/>';
	}
	public function index(){
		echo 'model index<br/>';
	}
}
class SonModel extends Model{
	public function __construct(){
		//调用父类的构造方法
		parent::__construct();
		echo 'sonModel<br/>';
	}
	//如果父类拥有和子类一样的方法，那么子类的方法会覆盖父类的方法
	public function index(){
		echo 'sonModel index<br/>';
	}
}
//当子类实例化的时候，如果父类有构造方法，那么会自动执行
$sonModel = new SonModel;
$sonModel->index();






 ?>