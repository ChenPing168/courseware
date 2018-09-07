<?php 
//1.获取access_token****************
//请求地址
$url = "https://api.weixin.qq.com/cgi-bin/token";
//获取access_token填写client_credential 
$grant_type = 'client_credential';
//第三方用户唯一凭证 
$appid = 'wxdf5bf0a77d1cb0d6';
//第三方用户唯一凭证密钥，即appsecret 
$secret = 'e354e13c6ef6dcf8ed89533344f8418f';
//最终地址
$url .= "?grant_type={$grant_type}&appid={$appid}&secret={$secret}";
//请求
$json = file_get_contents($url);
//把返回的json转为数组
$arr = json_decode($json,true);
$token = $arr['access_token'];

//2.调用接口************************
$url = "https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=";
$url .= $token;
//调取接口
$data = file_get_contents($url);
$data = json_decode($data);
//输出ip地址，微信服务器很多ip地址
foreach ($data->ip_list as $ip) {
	echo $ip . '<br/>';
}


 ?>
