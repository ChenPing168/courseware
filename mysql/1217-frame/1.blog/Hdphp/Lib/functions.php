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










 ?>