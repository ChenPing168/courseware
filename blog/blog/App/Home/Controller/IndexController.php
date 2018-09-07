<?php namespace Home\Controller; 
use Hdphp\Controller\Controller;
//前台默认控制器
class IndexController extends Controller{
	
    //前台首页
    public function index(){
    		
		//首页最新3篇文章
		$arcModel = new \Common\Model\Arc;
		$arcData = $arcModel->join('category','category_cid','=','cid')->orderBy('sendtime','DESC')->limit(3)->get();
		//实例中间表模型
		$arcTagModel = new \Common\Model\ArcTag;
		foreach ($arcData as $k => $v) {
			//获得每篇文章的标签，然后压入数组
			//中间表和标签表关联
			$data = $arcTagModel->join('tag','tag_tid','=','tid')->where("article_aid={$v['aid']}")->field('tid,tname')->get();
			$arcData[$k]['tag'] = $data;
		}
		View::with('arcData',$arcData);
    		
    		View::make();
    }
	
	
//	public function code(){
//	   Code::num(C('webset.code_len'))->fontColor(C('webset.code_color'))->make();
//	}
	
}




