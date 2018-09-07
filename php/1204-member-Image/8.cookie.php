<?php 
header('Content-type:text/html;charset=utf-8');
//读取作用于当前目录的cookie
//echo $_COOKIE['w'];

//读取作用于/目录的cookie
//echo $_COOKIE['h'];

//获取序列化之后的值
$str = $_COOKIE['cart'];
//反序列化
print_r(unserialize($str));









 ?>