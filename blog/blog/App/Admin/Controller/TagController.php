<?php namespace Admin\Controller; 
use Hdphp\Controller\Controller;
/**
 *标签管理控制器
 */
class TagController extends CommonController{
	private $model;
	public function __init(){
		//调CommonController里面的构造方法__init(包含验证是否登陆)
		parent::__init();
		$this->model = new \Common\Model\Tag;
	}
	//标签展示
	public function index(){
		View::make();
	}
	//标签添加
	public function add(){
		if(IS_POST){
		   	if($this->model->store()) View::success('添加成功',U('index'));
			View::error($this->model->getError());
		}
	    View::make();
	}
	
	public function edit(){
	    View::make();
	}
	
	public function del(){
		
	}
	
	
	
	
	
	
	
	
	
	
	
}