<?php 
include './function.php';
//获得时区
// echo date_default_timezone_get();
//设置时区(东八区)
date_default_timezone_set('PRC');
//输出时间
// echo date('Y/m/d H:i:s');


//输出时间戳
// echo time();
//格式化时间戳
// echo date('Y-m-d H:i:s',1447009181);


//1.如果不传递true 返回两段数字，(1)微秒数 (2)时间戳
//2.传递true，返回一段数字，秒数
// echo microtime();


//获得2000-1-1的时间戳
// echo strtotime('2000-1-1');

/*//获得昨天的时间戳
$yesterday = strtotime('-1 day');
//把昨天的时间戳转换日期
echo date('Y-m-d H:i:s',$yesterday);*/

/*//返回日期的一大堆信息
$arr = getdate();
p($arr);*/












 ?>