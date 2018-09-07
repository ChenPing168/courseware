<?php namespace Home\Controller; 
use Hdphp\Controller\Controller;
//列表页控制器
class ListController extends Controller{
	//列表页
	public function index(){
		//标签*********
		//处理标签名称
		$tid = Q('get.tid',0,'intval');
		if($tid){
			$tagModel = new \Common\Model\Tag;
			$name = $tagModel->where("tid={$tid}")->pluck('tname');
			//统计文章总数
			$arcTagModel = new \Common\Model\ArcTag;
			$total = $arcTagModel->join('article','article_aid','=','aid')->where("tag_tid=$tid AND is_recycle=0")->count();
			//根据tid筛选出来的文章
			$arcData = $arcTagModel
					->join('article','article_aid','=','aid')
					->join('category','category_cid','=','cid')
					->where("tag_tid={$tid} AND is_recycle=0")
					->get();
			
		}
		
		//分类***********
		$cid = Q('get.cid',0,'intval');
		//处理分类名称
		if($cid){
			$cateModel = new \Common\Model\Cate;
			$name = $cateModel->where("cid={$cid}")->pluck('cname');
			//统计该分类（包括子分类）所有的文章总数
			$cids = $cateModel->getSon($cateModel->get(),$cid);
			$cids[] = $cid;
			$arcModel = new \Common\Model\Arc;
			$total = $arcModel->where("category_cid in(" . implode(',', $cids) . ") and is_recycle=0")->count();
			//分页使用
			$page = Page::row(1)->url(__ROOT__ . "/l{$_GET['cid']}_t{$_GET['tid']}_p{page}.html")->make($total);
			//根据顶级分类，以及下面所有的子分类筛选出来文章
			$arcData = $arcModel->join('category','category_cid','=','cid')->where("category_cid in(" . implode(',', $cids) . ") and is_recycle=0")->limit(Page::limit())->get();
			//分配分页
			View::with("page",$page);
		}
		//名称
		View::with('name',$name);
		//共有多少篇文章
		View::with('total',$total);
		//给文章数据压入标签
		$arcTagModel = new \Common\Model\ArcTag;
		foreach ($arcData as $k => $v) {
			$arcData[$k]['tag'] = $arcTagModel->join('tag','tag_tid','=','tid')->where("article_aid={$v['aid']}")->field('tid,tname')->get();
		}
		//分配文章数据
		View::with('arcData',$arcData);
		
		View::make();
	}
}







