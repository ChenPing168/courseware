<?php namespace Home\Controller; 
use Hdphp\Controller\Controller;

//列表控制器
class ListController extends Controller{

	//构造函数
	public function __init()
	{
	}
	
	public function index(){
		//获得顶级分类
		$topCate = Db::table('category')->where("pid=0")->get();
		View::with('topCate',$topCate);
		//1.根据当前的cid获得对应的商品的gid
		$gids = $this->cidGetGids(Q('get.cid',0,'intval'));
		//2.根据gid找到商品属性
		$goodsAttr = $this->gidGetAttr($gids);
		View::with('goodsAttr',$goodsAttr);
		//3.处理筛选参数param 0_0_.....
		$num = count($goodsAttr);
		$param = isset($_GET['param']) ? explode('_', $_GET['param']) : array_fill(0, $num, 0);
		View::with('param',$param);
		//4.通过param参数筛选商品gid
		$resultGids = $this->filter($param,$gids);
		p($resultGids);
		
		
		View::make();
	}
	
	private function filter($param,$cidGids){
		$gids = array();
		foreach ($param as $gtid) {
			if($gtid){
				//1.找到gtvalue，比如找到"红色"
				$gtvalue = Db::table('goods_attr')->where("gtid={$gtid}")->pluck('gtvalue');
				//2.通过“红色”找到对应的商品id
				$gids[] = Db::table('goods_attr')->where("gtvalue='{$gtvalue}'")->lists('gid');
			}
		}
		//如果点击了“不限”之外的属性
		if($gids){
			//取交集
			$gidsTemp = $gids[0];
			foreach ($gids as $v) {
				$gidsTemp = array_intersect($gidsTemp, $v);
			}
			//和当前分类对应的gid再次取交集
			return array_intersect($gidsTemp, $cidGids);
		}else{//如果是全部是“不限”的时候
			return $cidGids;
		}
		
	
		
	}
	
	
	
	
	
	
	
	
	//通过gid获得商品的属性
	private function gidGetAttr($gids){
		$data = Db::table('goods_attr')->where("gid in(" . implode(',', $gids) . ")")->groupBy('gtvalue')->get();
		//1.把相同类型属性id的归结在一起
		$sameAttr = array();
		foreach ($data as $v) {
			$sameAttr[$v['taid']][] = $v;
		}
		//2.组合数组
		$temp = array();
		foreach ($sameAttr as $taid => $v) {
			$temp[] = array(
				'name' => Db::table('type_attr')->where("taid={$taid}")->pluck('taname'),
				'value' => $v
			);
		}
		return $temp;
		
	}
	
	
	
	
	//通过cid获得gid
	private function cidGetGids($cid){
		//1.通过当前的cid获得对应的所有的子集cid
		$cids = $this->getSonCids(Db::table('category')->get(),$cid);
		$cids[] = $cid;
		//2.通过子集cid查找对应的商品的gid
		$gids = Db::table('goods')->where("cid in(" . implode(',', $cids) . ")")->lists('gid');
		return $gids;
	}
	
	//递归获得指定cid的所有子集
	private function getSonCids($data,$cid){
		$temp = array();
		foreach ($data as $v) {
			if($v['pid'] == $cid){
				$temp[] = $v['cid'];
				$temp = array_merge($temp,$this->getSonCids($data, $v['cid']));
			}
		}
		return $temp;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
