<?php 
function p($var){
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}


//系统配置项
$sysConfig = include "./sysConfig.php";
$userConfig = include "./userConfig.php";
//1.加载配置项，让用户的优先级更高
C($sysConfig);
C($userConfig);
//2.获得全部配置项
//p(C());
//3.获得指定的配置项
echo C('CODE_LEN');
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