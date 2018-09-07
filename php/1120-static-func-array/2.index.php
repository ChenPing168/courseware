<?php 
header('Content-type:text/html;charset=utf-8');
//函数内部的变量不会影响外部，所以结果是houdunwang
/*$a = 'houdunwang';
function hd($var){
	$var = 'houdun';
}
hd($a);
echo $a;*/


/*$a = 'houdunwang';
//按址传参，相当于把$a的地址传入函数内部
function hd(&$var){
	$var = 'houdun';
}
hd($a);
echo $a;*/


/*//默认参数必须放在没有默认参数的后面
function hd($num1,$num2=100){
	return $num1 + $num2;
}
echo hd(1);*/


//获得类型
$type = isset($_GET['type']) ? $_GET['type'] : 'gif';
//组合函数名称
$fn = 'open_' . $type;
//open_gif()
$fn();

function open_gif(){
	echo '打开gif';
}
function open_png(){
	echo '打开png';
}
function open_bmp(){
	echo '打开bmp';
}










 ?>