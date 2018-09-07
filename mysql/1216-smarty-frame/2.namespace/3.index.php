<?php namespace Home\Controller;
//载入总控制器
include "./Controller.class.php";
//命名空间类名导入
//把Hdphp\Controller空间下面的Controller类导入
//未来继承Controller不用写完整路径
use Hdphp\Controller\Controller;
class IndexController extends Controller{
	public function index(){
		$this->success();
	}
}
$obj = new IndexController;
$obj->index();








 ?>