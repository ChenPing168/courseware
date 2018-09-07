<?php namespace Home\Controller; 
use Hdphp\Controller\Controller;
include "./WeixinAPI/Weixin.php";
use Weixin;

//测试控制器
class IndexController extends Controller{

	//构造函数
	public function __init()
	{
	}
	
    //动作
    public function index(){
    		Weixin::validate();
		$eventObj = Weixin::getInstance('event');
		if($eventObj->isSubscribe()){
			Weixin::responseMsg('朋友一生一起走，那些日子不再有');
		}
    }
}




