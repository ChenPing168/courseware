<?php 
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
//	$wxXML = <<<str
//<xml>
// <ToUserName><![CDATA[toUser]]></ToUserName>
// <FromUserName><![CDATA[fromUser]]></FromUserName> 
// <CreateTime>1348831860</CreateTime>
// <MsgType><![CDATA[text]]></MsgType>
// <Content><![CDATA[2]]></Content>
// <MsgId>1234567890123456</MsgId>
//</xml>
//str;
	$wxObj = simplexml_load_string($wxXML);
	//A用户订阅B用户的公众号 ToUserName是B FromUserName是A
	//B用户要给A用户发送消息 ToUserName是A FromUserName是B
	$FromUserName = $wxObj->ToUserName;
	$ToUserName = $wxObj->FromUserName;
	//消息类型为事件类型
	if($wxObj->MsgType == 'event'){
		//如果是订阅
		if($wxObj->Event == 'subscribe'){
			
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
	
	if($wxObj->MsgType == 'text'){
		switch ($wxObj->Content) {
			case '1':
			$CreateTime = time();
			$MsgType = 'text';
			$Content = '1是你好';
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
				break;
			case '2':
				$data = array(
					array(
						'title'=>'刘校长',
						'description'=>'校长',
						//图片地址
						'picurl' => 'http://www.houdunwang.com/template/img/liuxiaozhang.jpg',
						//跳转地址
						'url' => 'http://www.houdunwang.com',
					),
					array(
						'title'=>'刘校长',
						'description'=>'校长',
						//图片地址
						'picurl' => 'http://www.houdunwang.com/template/img/liuxiaozhang.jpg',
						//跳转地址
						'url' => 'http://www.houdunwang.com',
					),
					array(
						'title'=>'刘校长',
						'description'=>'校长',
						//图片地址
						'picurl' => 'http://www.houdunwang.com/template/img/liuxiaozhang.jpg',
						//跳转地址
						'url' => 'http://www.houdunwang.com',
					),
				);
				$template = "<xml>
		<ToUserName><![CDATA[{$ToUserName}]]></ToUserName>
		<FromUserName><![CDATA[{$FromUserName}]]></FromUserName>
		<CreateTime>{$wxObj->CreateTime}</CreateTime>
		<MsgType><![CDATA[news]]></MsgType>
		<ArticleCount>".count($data)."</ArticleCount>
		<Articles>";
				foreach ($data as $v) {
					$template .=  "<item>
					<Title><![CDATA[{$v['title']}]]></Title> 
					<Description><![CDATA[{$v['description']}]]></Description>
					<PicUrl><![CDATA[{$v['picurl']}]]></PicUrl>
					<Url><![CDATA[{$v['url']}]]></Url>
					</item>";
				}
				$template .= "</Articles></xml>";
				echo $template;exit;
				break;
			default:
				
				break;
		}
	}
}











 ?>