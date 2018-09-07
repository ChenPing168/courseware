<?php 
$menu = array(
            'button' => array(
                array(
                    'type' => 'click',
                    'name' => '今日歌曲',
                    'key'  => 'jrgq',
                ),
                array(
                    'name'       => '菜单',
                    'sub_button' => array(
                        array(
                            "type" => "view",
                            "name" => "百度",
                            "url"  => "http://www.baidu.com/"
                        ),
                      
                        array(
                            "type" => "click",
                            "name" => "联系方式",
                            "key"  => "address"
                        )
                    )
                )
            )
        );
include './get.php';
//$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".getToken();
//$curl = curl_init();
////设置请求地址
//curl_setopt($curl, CURLOPT_URL, $url);
////数组转json
//$menu = json_encode($menu,JSON_UNESCAPED_UNICODE);
//$menu = str_replace('\\', '', $menu);
////发送post请求
//curl_setopt($curl, CURLOPT_POST, 1);
////设置发送的数据
//curl_setopt($curl, CURLOPT_POSTFIELDS, $menu);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
////执行
//$output = curl_exec($curl);
//curl_close($curl);
//var_dump($output);


	$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".getToken();
	//如果数据不为空
 if (!empty($menu)){
	  //数组转json,并且不编码
	 $menu = json_encode($menu,JSON_UNESCAPED_UNICODE);
	$menu = str_replace('\\/', '/', $menu);
	 echo send_post($url,$menu);
}
function send_post($url, $postdata) {    
      $options = array(    
            'http' => array(    
                'method' => 'POST',    
                'header' => 'Content-type:application/x-www-form-urlencoded',    
                'content' => $postdata,    
                'timeout' => 15 * 60 // 超时时间（单位:s）    
            )    
        );    
        $context = stream_context_create($options);    
        $result = file_get_contents($url, false, $context);             
        return $result;  
}







 ?>