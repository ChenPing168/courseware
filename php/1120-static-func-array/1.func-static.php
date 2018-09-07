<?php 

//声明与调用函数
/*function a($num){
	return $num + 1;
}
echo a(100);*/


//参数
/*function hd($num1,$num2){
	return $num1 + $num2;
}
$result = hd(100,100);
echo $result;*/

//函数可以不用传参的两种情况
//1.函数本身就没有参数
/*function houdun(){
	return 'houdunwang';
}
echo houdun();*/
//2.函数有默认值
/*function hd($num=100){
	return $num + 100;
}
echo hd();
*/


// return 和 die(或者exit)
/*function hd(){
	return 123;
	//这行永远都不会输出，因为return之后，就不走下面了
	echo '456';
}
echo hd();
echo 'houdunwang';*/

/*function hd(){
	echo 123;
	die;
	echo '456';
}
//因为函数内部有die，所以终止下面的所有的程序
hd();
echo 'houdunwang';*/



/*$a = 0;
function hd(){
	//局部变量，不会影响外面的变量
	$a = 3;
	echo $a;
}
hd();
echo $a;*/


/*//引入全局变量
$a = 'houdunwang';
function hd(){
	//把外部的变量引入函数内部（不推荐）
	global $a;
	$a = 'houdun';
}
hd();
echo $a;*/


//静态变量（重点）
function hd(){
	//1.只初始值一次
	//2.在一次刷新之间多次函数调用变量可以保存
	static $a = 0;
	$a++;
	echo $a;
}
hd();
hd();
hd();
hd();
hd();
hd();
hd();
hd();










 ?>