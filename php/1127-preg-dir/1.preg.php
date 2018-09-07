<?php 
include "../functions.php";
/*//定义正则，进行匹配
$preg = "/houdun/";
$str = "www.houdunwang.com";
$int = preg_match($preg, $str);
var_dump($int);*/


//匹配任意一个数字
/*$preg = "/\d/";
$str = '123456789';
echo preg_match($preg, $str);*/

//和上面是一样的
/*$preg = "/[0-9]/";
$str = '123456789';
echo preg_match($preg, $str);*/

/*//数字，字母，下划线
$preg = "/\w/";
$str = 'abc123';
echo preg_match($preg, $str);*/

/*//特殊字符需要转义
$preg = "/\./";
$str = 'www123com';
echo preg_match($preg, $str);*/

/*//只要匹配到一个就算成功
$preg = "/[@#]/";
$str = 'abc@163.com';
echo preg_match($preg, $str);*/

/*//除了0-9的任意字符
$preg = "/[^0-9]/";
$str = 'abc123';
echo preg_match($preg, $str);*/

/*//通过正则把字符串变为数组
$str ="1.jpg@2.jpg@3.jpg#4.jpg|5.jpg";
$preg = "/[@#|]/";
$arr = preg_split($preg, $str);
var_dump($arr);
*/

// 以上示例是将houdunwang字符串中的houdun描红
$str = "后盾官网www.houdunwang.com后盾论坛 http://bbs.houdunwang.com我在后盾的网名叫houdun";

$preg = "/(houdun)wan(g)/";
echo preg_replace($preg, '<span style="color:red">\1</span>wan<span style="color:green">\2</span>', $str);











 ?>