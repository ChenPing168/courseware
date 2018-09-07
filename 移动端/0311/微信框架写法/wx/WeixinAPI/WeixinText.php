<?php 
class WeixinText{
	//如果用户的消息是文本类型
	public function isText(){
		$wxObj = Weixin::getWxObj();
		if(strtolower($wxObj->MsgType) == 'text'){
			return true;
		}
		return false;
	}
}



 ?>