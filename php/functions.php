<?php 
header('Content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
/**
 * [p 打印函数]
 * @param  [type] $var [description]
 * @return [type]      [description]
 */
function p($var,$name=NULL){
	if($name){
		echo "<h2 style='width:100%;height:40px;background:blue;text-align:center;line-height:40px;color:white;'>{$name}</h2>";
	}
	echo '<pre style="padding:5px;background:#eee;border-radius:4px;border:1px solid #ccc">';
	print_r($var);
	echo '</pre>';
}
/**
 * [success 成功提示函数]
 * @param  [type] $msg [成功提示的消息]
 * @param  [type] $url [成功之后跳转的地址]
 * @return [type]      [description]
 */
function success($msg,$url){
	$str = <<<str
<script>
alert('{$msg}');
location.href='{$url}';
</script>
str;
	echo $str;exit;
}







 ?>