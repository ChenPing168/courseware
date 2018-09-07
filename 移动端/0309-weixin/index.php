<?php 
//1.明天上午上课
//2.完成houdunphp.com的注册
//3.完成微信的订阅回复


$signature = $_GET["signature"];
$timestamp = $_GET["timestamp"];
$nonce = $_GET["nonce"];	
$token = 'hdwx';
$tmpArr = array($token, $timestamp, $nonce);
sort($tmpArr, SORT_STRING);
$tmpStr = implode( $tmpArr );
$tmpStr = sha1( $tmpStr );
if( $tmpStr == $signature && isset($_GET['echostr'])){
	echo $_GET["echostr"];exit;
}else{
	//接收到微信服务器的返回到信息
	$wxXML = $GLOBALS['HTTP_RAW_POST_DATA'];
	$wxObj = simplexml_load_string($wxXML);
	//A用户订阅B用户的公众号 ToUserName是B FromUserName是A
	//B用户要给A用户发送消息 ToUserName是A FromUserName是B
	
	//消息类型为事件类型
	if($wxObj->MsgType == 'event'){
		//如果是订阅
		if($wxObj->Event == 'subscribe'){
			$FromUserName = $wxObj->ToUserName;
			$ToUserName = $wxObj->FromUserName;
			$CreateTime = time();
			$MsgType = 'text';
			$Content = '欢迎关注后盾教学微信订阅号，哈哈我是测试';
			$template = <<<str
				<xml>
				<ToUserName><![CDATA[{$ToUserName}]]></ToUserName>
				<FromUserName><![CDATA[{$FromUserName}]]></FromUserName>
				<CreateTime>{$CreateTime}</CreateTime>
				<MsgType><![CDATA[{$MsgType}]]></MsgType>
				<Content><![CDATA[{$Content}]]></Content>
				</xml>
str;
			echo $template;exit;
				
		}
	}
}






 ?>