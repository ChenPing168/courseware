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
			//学生姓名
			$sname = $_POST['sname'];
			//所属的班级cid
			$cid = (int)$_POST['cid'];
			//1.组合sql
			$sql = "INSERT INTO stu (sname,cid) VALUES ('{$sname}',{$cid})";
			M()->exec($sql);
			//3.成功提示
		    $this->success('添加成功','index.php?c=Stu');
		}
	   $this->display();
	}
	
	//修改
	public function edit(){
		//2.修改 
		if(IS_POST){
			$sname = $_POST['sname'];
			$sid = $_POST['sid'];
			$sql = "UPDATE stu SET sname='{$sname}' WHERE sid={$sid}";
			M()->exec($sql);
			$this->success('修改成功','?c=Stu');
		}
		//1.获得旧数据
		$sid = isset($_GET['sid']) ? (int)$_GET['sid'] : 0;
		$oldData = M()->query("SELECT * FROM stu WHERE sid={$sid}");
		$this->assign('oldData',$oldData[0]);
		
		$this->display();
	}
	
	//删除
	public function del(){
	    $sid = isset($_GET['sid']) ? (int)$_GET['sid'] : 0;
		$sql = "DELETE FROM stu WHERE sid={$sid}";
		M()->exec($sql);
		$this->success('删除成功','index.php?c=Stu');
	}
	
}





