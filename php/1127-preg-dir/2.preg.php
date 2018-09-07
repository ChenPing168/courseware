<?php 
include "../functions.php";
/*//把baidu或者sina替换成houdunwang
$str = "http://www.baidu.com新浪网http://www.sina.com";
$preg = "/\.(baidu|sina)\./";
echo preg_replace($preg, '.houdunwang.', $str);*/


//* 重复0次或者更多次
// $preg = "/\d*/";
// $str = 'abc';
// echo preg_match($preg, $str);

//+ 重复一次或者更多次
/*$preg = "/\d+/";
$str = 'abc';
echo preg_match($preg, $str);*/



/*//？匹配零次或者是一次
$preg = "/(http:\/\/)?/";
// $str = 'http://www.baidu.com';
$str = 'www.baidu.com';
echo preg_match($preg, $str);*/


/*//^ 必须以什么开始
//$ 必须以什么结尾
//\d{8} 重复8位数字
$number = '13788888888';
$preg = "/^(137|138|157|158)\d{8}$/";
echo preg_match($preg, $number);*/


/*//{3,} 重复3次或者3次以上
$preg = "/\d{3,}/";
$str = '1233333333333333333333';
echo preg_match($preg, $str);*/


//{3,4} 重复3次到4次
/*$preg = "/^\d{3,4}$/";
$str = '1233333333333333333333';
echo preg_match($preg, $str);*/


//在重复的后面加上 ? 代表禁止贪婪
/*$str = "<div>123</div><div>456</div>";
$preg = "/<div>(.*?)<\/div>/";
preg_match_all($preg, $str, $arr);
p($arr);*/


//i 代表不区分大小写
/*$str = 'ABC';
$preg = "/[a-z]/i";
echo preg_match($preg, $str);*/


//s 将多行视为单行
/*$str = <<<str
<div>后盾网</div><div>
百度</DIV>
str;
$preg = "/<div>(.*?)<\/div>/is";
preg_match_all($preg, $str, $arr);
p($arr);*/


// e 方法将要被淘汰了（作为了解）
/*$str = 'admin:admin';
// $str = 'admin:admin888';
// $str = 'user:guest';
$preg = "/(\w{2,8}):([a-z0-9]{1,20})/ie";
echo preg_replace($preg, '"\1:" . md5("\2")', $str);*/


//此方法代替 e 模式
/*$str = 'admin:admin888';
$str = 'guest:admin777';
$preg = "/(\w{2,8}):([0-9a-z]{1,20})/is";
echo preg_replace_callback($preg, 'func', $str);
function func($var){
	//先打印看这个变量
	p($var);
	return $var[1] . ':' . md5($var[2]);
}*/


 ?>









