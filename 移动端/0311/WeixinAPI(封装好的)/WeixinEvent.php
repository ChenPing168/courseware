<?php 
class WeixinEvent{
	//判断是否是事件类型
	public function isEvent(){
		$wxObj = Weixin::getWxObj();
		if(strtolower($wxObj->MsgType) == 'event'){
			return true;
		}
		return false;
	}
	
	//判断是否是关注
	public function isSubscribe(){
		$wxObj = Weixin::getWxObj();
		if(strtolower($wxObj->Event) == 'subscribe'){
			return true;
		}
		return false;
	}
	//判断是否是取消关注
	public function isUnSubscribe(){
		$wxObj = Weixin::getWxObj();
		if(strtolower($wxObj->Event) == 'unsubscribe'){
			return true;
		}
		return false;
	}
	
	public function isClick(){
		$wxObj = Weixin::getWxObj();
		if(strtolower($wxObj->Event) == 'click'){
			return true;
		}
		return false;
	}
	
	
}



 ?>