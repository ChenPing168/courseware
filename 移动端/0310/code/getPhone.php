<?php
function getPhone($num){
$ch = curl_init();
$url = 'http://apis.baidu.com/apistore/mobilephoneservice/mobilephone?tel=' . $num;
$header = array(
    'apikey:80f39aa6eebefb27d6f4dbf1de942a85 ',
);
// 添加apikey到header
curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 执行HTTP请求
curl_setopt($ch , CURLOPT_URL , $url);
$res = curl_exec($ch);
return json_decode($res,true);
	
}
	
//	$ch = curl_init();
//  $url = 'http://apis.baidu.com/heweather/weather/free?city=shanghai';
//  $header = array(
//      'apikey: 80f39aa6eebefb27d6f4dbf1de942a85',
//  );
//  // 添加apikey到header
//  curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
//  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//  // 执行HTTP请求
//  curl_setopt($ch , CURLOPT_URL , $url);
//  $res = curl_exec($ch);
//	echo "<pre>";
//  print_r(json_decode($res,true));
	
	
	
	
	
?>