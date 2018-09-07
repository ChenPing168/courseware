<?php 
include "./function.php";

getRunTime('start');
for ($i=0; $i < 1000000; $i++) { 
	$a = 1;
}
echo getRunTime('end');


//计算脚本执行时间的函数
function getRunTime($pos){
	static $time;
	if($pos == 'start'){
		$time = microtime(true);
	}elseif($pos == 'end'){
		return microtime(true) - $time;
	}else{
		echo '参数传递错误';
	}
}

 ?>