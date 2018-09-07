<?php namespace Home;
function var_dump($var){
	echo $var;
}
//调用当前空间的var_dump函数
var_dump(1);
//调用全局的var_dump，系统的var_dump
\var_dump(1);

 ?>