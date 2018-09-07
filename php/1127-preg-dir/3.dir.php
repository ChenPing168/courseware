<?php 
//硬盘总大小
/*$total = disk_total_space('.');
echo $total/pow(1024, 3) . 'G<br/>';*/


/*//硬盘剩余大小
$free = disk_free_space('.');
//四舍五入保留两位小数
echo round($free/pow(1024, 3),2) . 'G';*/


//格式化大小
// $size = filesize('../php5.chm');
// $size = disk_free_space('.');
$size = 100;
switch (true) {
	//G的级别
	case $size > pow(1024, 3):
		$unit = array(3,'G');
		break;
	//M的级别
	case $size > pow(1024, 2):
		$unit = array(2,'M');
		break;
	//K的级别
	case $size > pow(1024, 1):
		$unit = array(1,'K');
		break;
	
	default:
		//B的级别
		$unit = array(0,'B');
		break;
}

$formatSize = round($size / pow(1024, $unit[0]),2) . $unit[1];
echo $formatSize;








 ?>