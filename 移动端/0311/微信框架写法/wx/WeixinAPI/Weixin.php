<?php 
class Weixin{
	//验证的token
	public static $token;
	//第三方用户唯一凭证 
	public static $appid;
	//第三方用户唯一凭证密钥，即appsecret 
	public static $secret;
	//验证方法
	public static function validate(){
		if(!isset($_GET['signature']) || !isset($_GET['timestamp']) || !isset($_GET['nonce'])){
			return false;
		}
		$signature = $_GET["signature"];
		$timestamp = $_GET["timestamp"];
		$nonce = $_GET["nonce"];	
		$token = self::$token;
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		if( $tmpStr == $signature && isset($_GET['echostr'])){
			echo $_GET["echostr"];
			return true;
		}
		return false;
	}
	
	//获得微信的对象
	public static function getWxObj(){
		$wxXML = $GLOBALS['HTTP_RAW_POST_DATA'];
		$wxObj = simplexml_load_string($wxXML);
		return $wxObj;
	}
	
	//获得实例
	public static function getInstance($name){
		//WeixinEvent
		$className = "Weixin" . ucfirst($name);
		include "./WeixinAPI/{$className}.php";
		$obj = new $className;
		return $obj;
	}
	
	//返回消息
	public static function responseMsg($Content){
		$wxObj = self::getWxObj();
		$FromUserName = $wxObj->ToUserName;
		$ToUserName = $wxObj->FromUserName;
		$CreateTime = time();
		$MsgType = 'text';
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
	//返回图文消息
	public static function responseNews($data){
		$wxObj = self::getWxObj();
		$FromUserName = $wxObj->ToUserName;
		$ToUserName = $wxObj->FromUserName;
		$CreateTime = time();
		$template = "<xml>
		<ToUserName><![CDATA[{$ToUserName}]]></ToUserName>
		<FromUserName><![CDATA[{$FromUserName}]]></FromUserName>
		<CreateTime>{$CreateTime}</CreateTime>
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
	}
	
	public static function getToken(){
		//1.获取access_token****************
		//请求地址
		$url = "https://api.weixin.qq.com/cgi-bin/token";
		//获取access_token填写client_credential 
		$grant_type = 'client_credential';
		//第三方用户唯一凭证 
		$appid = self::$appid;
		//第三方用户唯一凭证密钥，即appsecret 
		$secret = self::$secret;
		//最终地址
		$url .= "?grant_type={$grant_type}&appid={$appid}&secret={$secret}";
		//请求
		$json = file_get_contents($url);
		//把返回的json转为数组
		$arr = json_decode($json,true);
		$token = $arr['access_token'];
		return $token;
	}
	
}
//验证的token
Weixin::$token = 'hdwx123';
Weixin::$appid  = 'wxcc67db5e627a633d';
Weixin::$secret  = 'd4624c36b6795d1d99dcf0547af5443d';










 ?>