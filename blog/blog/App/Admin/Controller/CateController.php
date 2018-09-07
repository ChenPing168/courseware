<?php namespace Admin\Controller;
use Hdphp\Controller\Controller;
class CateController extends CommonController{
	private $model;
	public function __init(){
		//调用CommonController里面的构造函数
		parent::__init();
		//实例化cate模型
	  	$this->model = new \Common\Model\Cate;
	}
	
	//展示分类
	public function index(){
		//获得所有的分类
		$data = $this->model->get();
		//实例化文章模型
		$arcModel = new \Common\Model\Arc;
		foreach ($data as $k => $v) {
			$data[$k]['arcTotal'] = $arcModel->where("category_cid={$v['cid']}")->count();
		}
		//把数据变为树状结构
		$data = Data::tree($data,'cname');
		//分配数据
		View::with('data',$data);
		//载入模板
	    View::make();
	}
	//添加分类
	public function add(){
		if(IS_POST){
			//调用模型里面的store方法，这个方法返回真或者假
			if($this->model->store()) View::success('添加成功',U('index'));
			View::error($this->model->getError());
		}
	    View::make();
	}
	
	//添加子分类
	public function addSon(){
		if(IS_POST){
			//调用模型的添加操作
		  	if(!$this->model->store()) View::error($this->model->getError());
			View::success('添加成功',U('index'));
		}
		//获得“所属分类”
		$cid = Q('get.cid',0,'intval');
		//只要cid,cname字段
		$parent = $this->model->field('cid,cname')->where("cid={$cid}")->find();
		View::with('parent',$parent);
	    View::make();
	}
	
	//控制器 编辑分类 方法
	public function edit(){
		//3.修改
		if(IS_POST){
		   	if($this->model->edit()) View::success('修改成功',U('index'));
			View::error($this->model->getError());
		}
		$cid = Q('get.cid',0,'intval');
		//1.获得旧内容
		$oldData = $this->model->where("cid={$cid}")->find();
		View::with('oldData',$oldData);
		//2.处理“所属分类”，不能是自己和自己的子集
		$cateData = $this->model->getNoMy($cid);
		View::with('cateData',$cateData);
		
	    View::make();
	}
	
//	cid      cname    pid
//	1        新闻      0
//	2        娱乐      0
//	3      军事新闻     1 //删除军事新闻做测试
//	4      中国军事     3
//	5      美国军事     3
//	6      朝阳区军事   4
//	7      后盾军事     6
//	8      newYork     5
	//删除
	public function del(){
		//接收cid
		$cid = Q('get.cid',0,'intval');
		//1.获得要删除的分类的pid
		//pluck获得指定的字段值
		$pid = $this->model->where("cid={$cid}")->pluck('pid');
		//2.让子集上移一位，就是把子集分类的pid变成要删除分类的pid
		$this->model->where("pid={$cid}")->save(array('pid'=>$pid));
		//3.删除对应的分类
	    $this->model->where("cid=$cid")->delete();
		View::success('删除成功');
	}
}









 ?>