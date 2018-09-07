<?php namespace Home\Controller;
//导入Hdphp\Lib命名空间下面的Controller类
use Hdphp\Lib\Controller;
//学生管理控制器
class StuController extends Controller{
	//显示学生首页
	public function index(){
		$data = M()->query("SELECT * FROM stu As s JOIN class AS c ON s.cid=c.cid");
		$this->assign('data',$data);
		$this->display();
	}
	
	//添加
	public function add(){
		if(IS_POST){
			//1.组合sql
			//2.交给M()->exec()
			//3.成功提示
		    //$this->success();
		}
	   $this->display();
	}
	
	//修改
	public function edit(){
	    
	}
	
	//删除
	public function del(){
	    
	}
	
}





