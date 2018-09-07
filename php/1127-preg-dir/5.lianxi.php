<?php 
// 将所需要的目录全部创建,包括
// temp/cache
// module
// templete
$arr = array(
	'temp/cache',
	'module',
	'templete'
);
foreach ($arr as $d) {
	//短路：前面不成立，执行后面 
	is_dir($d) || mkdir($d,0777,true);
}







 ?>