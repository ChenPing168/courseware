<?php 
include "./Weixin.php";
//验证服务器
Weixin::validate();
//得到事件类型对象
$eventObj = Weixin::getInstance('event');
//如果是事件类型
if($eventObj->isEvent()){
	//如果是关注动作
	if($eventObj->isSubscribe()){
		Weixin::responseMsg('谢谢关注我的订阅号！你会走好运的！');
	}
	//如果是取消关注
	if($eventObj->isUnSubscribe()){
		//把数据库的粉丝表清除掉一个
		
	}
	
	//点击菜单事件
	if($eventObj->isClick()){
		$wxObj = Weixin::getWxObj();
		switch ($wxObj->EventKey) {
			case 'jrgq':
				Weixin::responseMsg('今日没有歌曲');
				break;
			case 'address':
				Weixin::responseMsg('朝阳区顺白路12号后盾it教育102室');
				break;
			
			
		}
	}
	
	
	
	
}
//如果是文本类型
$textObj = Weixin::getInstance('text');
$wxObj = Weixin::getWxObj();
if($textObj->isText()){
	switch ($wxObj->Content) {
		case '1':
			Weixin::responseMsg('1是美女');
			break;
		case '2':
			Weixin::responseMsg('2是帅哥');
			break;
		case '3':
			$data = array(
					array(
						'title'=>'刘校长',
						'description'=>'校长',
						//图片地址
						'picurl' => 'http://www.houdunwang.com/template/img/liuxiaozhang.jpg',
						//跳转地址
						'url' => 'http://www.baidu.com',
					),
					array(
						'title'=>'刘校长',
						'description'=>'校长',
						//图片地址
						'picurl' => 'http://www.houdunwang.com/template/img/liuxiaozhang.jpg',
						//跳转地址
						'url' => 'http://www.baidu.com',
					),
					array(
						'title'=>'刘校长',
						'description'=>'校长',
						//图片地址
						'picurl' => 'http://www.houdunwang.com/template/img/liuxiaozhang.jpg',
						//跳转地址
						'url' => 'http://www.baidu.com',
					),
				);
			Weixin::responseNews($data);
			break;
		
		default:
			Weixin::responseMsg('千万别乱输，您已被定位！');
			break;
	}
}











 ?>