<?php 
class WeixinButton{
	//创建菜单
	public function createButton($button){
		$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".Weixin::getToken();
		//如果数据不为空
		 if (!empty($button)){
			//数组转json,并且不编码
			$button = json_encode($button,JSON_UNESCAPED_UNICODE);
			$button = str_replace('\\/', '/', $button);
			$options = array(    
	            'http' => array(    
	                'method' => 'POST',    
	                'header' => 'Content-type:application/x-www-form-urlencoded',    
	                'content' => $button,    
	                'timeout' => 15 * 60 // 超时时间（单位:s）    
	            )    
        		);    
	        $context = stream_context_create($options);    
	        $result = file_get_contents($url, false, $context);             
	        return $result;
		}
	}
	
	public function delButton(){
		$url = "https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=" . Weixin::getToken();
		$result = file_get_contents($url);
		return $result;
	}
	
	public function getButton(){
		
	}
	
	
	
	
	
	
	
	
	
	
}


 ?>