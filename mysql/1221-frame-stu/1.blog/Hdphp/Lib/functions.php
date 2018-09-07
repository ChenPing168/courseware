<?php
function p($var){
	echo '<pre>';
	print_r($var);
	echo '<pre>';
}
//局部不缓存，在SmartView里面有体现
function nocache($params, $content, &$smarty){
	return $content;
}

function M(){
	$model = new \Hdphp\Tool\Model;
	return $model;
}
//终止函数
function halt($msg){
	include 'Public/halt.html';
	exit;
}

//网站配置项函数
function C($var=NULL){
	//保存最终配置项的数组
	static $config = array();
	//如果是数组的时候要加载配置项
	if(is_array($var)){
		$config = array_merge($config,$var);
	}
	//如果是字符串的时候，返回指定配置项
	if(is_string($var)){
		return isset($config[$var]) ? $config[$var] : NULL;
	}
	if(is_null($var)){
		//返回全部配置项
		return $config;
	}
}








 ?>