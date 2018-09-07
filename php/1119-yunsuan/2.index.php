<?php 
header('Content-type:text/html;charset=utf-8');
// 检测$_GET['page']中的page是否为数字,如果不是显示“页码不正确”, 否则显示你将看到XX页
$page = (int)$_GET['page'];
if($page > 0){
	echo "您看到" . $page . "页";
}else{
	echo "页码不正确";
}





 ?>