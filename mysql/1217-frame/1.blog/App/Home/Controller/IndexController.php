<?php namespace Home\Controller;
//导入Hdphp\Lib命名空间下面的Controller类
use Hdphp\Lib\Controller;
class IndexController extends Controller{
	//显示首页
	public function index(){
		//查询数据库
		$data = M()->query("SELECT * FROM arc");
		//分配变量
		$this->assign('data',$data);
		//载入模板
		$this->display('index.php');
	}
	//显示验证码
	public function code(){
		//调用工具类
	    $code = new \Hdphp\Tool\Code;
		$code->show();
	}
}




 ?>