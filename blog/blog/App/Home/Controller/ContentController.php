<?php namespace Home\Controller; 
use Hdphp\Controller\Controller;
//内容页控制器
class ContentController extends Controller{
	//内容页
	public function index(){
		$aid = Q('get.aid',0,'intval');
		$arcModel = new \Common\Model\Arc;
		//刷新浏览次数+1
		$arcModel->where("aid={$aid}")->increment('click',1);
		//UPDATE article SET click=click+1 WHERE aid=$aid;
		//文章和文章数据表关联
		$data = $arcModel->join('article_data','aid','=','article_aid')->where("aid={$aid}")->find();
		$arcTagModel = new \Common\Model\ArcTag;
		$data['tag'] = $arcTagModel
						   ->join('tag','tag_tid','=','tid')
						   ->where("article_aid={$aid}")
						   ->field('tid,tname')->get();
		View::with('data',$data);
		View::make();
	}
}








