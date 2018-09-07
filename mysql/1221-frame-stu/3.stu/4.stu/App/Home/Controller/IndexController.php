<?php namespace Home\Controller;
//导入Hdphp\Lib命名空间下面的Controller类
use Hdphp\Lib\Controller;
class IndexController extends Controller{
	//显示班级首页
	public function index(){
		$this->assign('data',M()->query("SELECT * FROM class"));
		$this->display();
	}
	//添加班级
	public function add(){
		//如果是POST提交
		if(IS_POST){
			$cname = $_POST['cname'];
			//组合sql
			$sql = "INSERT INTO class SET cname='{$cname}'";
			//执行添加
			M()->exec($sql);
			$this->success('添加成功','index.php');
		}
		$this->display();
	}
	
	//删除
	public function del(){
		$cid = isset($_GET['cid']) ? (int)$_GET['cid'] : 0;
		//1.判断班级下面是否有学生，如果有不让直接删除班级
		$stuData = M()->query("SELECT * FROM stu WHERE cid={$cid}");
		if($stuData){
			$this->error('请先删除该班级下面的学生');
		}
		//2.直接删除班级
		$sql = "DELETE FROM class WHERE cid={$cid}";
		M()->exec($sql);
		$this->success('删除成功','index.php');
	}
	//编辑
	public function edit(){
		//1.获得旧数据
		$cid = isset($_GET['cid']) ? (int)$_GET['cid'] : 0;
		$oldData = M()->query("SELECT * FROM class WHERE cid={$cid}");
		$this->assign('oldData',$oldData[0]);
		//2.修改
		if(IS_POST){
			$cname = $_POST['cname'];
			$sql = "UPDATE class SET cname='{$cname}' WHERE cid={$cid}";
			M()->exec($sql);
			$this->success('编辑成功','index.php');
		}
	   $this->display();
	}
	
	
	
	
}




