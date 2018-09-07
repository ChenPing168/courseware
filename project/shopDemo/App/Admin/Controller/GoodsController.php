<?php namespace Admin\Controller; 

use Hdphp\Controller\Controller;

//测试控制器
class GoodsController extends Controller{
	
    //动作
    public function add(){
    		if(IS_POST){
    		    p(Q("post."));
    		    //$this->success();
    		}
    		//获得所属分类
		$cate = Data::tree(Db::table('category')->get(),'cname');
		View::with('cate',$cate);
		//获得所属品牌
		View::with('brand',Db::table('brand')->get());
		View::make();
    }
	
	public function getTypeAttr(){
		$tid = Q('post.id',0,'intval');
		$data = Db::table('type_attr')->where("tid={$tid}")->get();
		foreach ($data as $k => $v) {
			$data[$k]['tavalue'] = explode(',', $v['tavalue']);
		}
		echo json_encode($data);exit;
		
	}
	
	
	
	
	
	
	
	
	
	
	
}




