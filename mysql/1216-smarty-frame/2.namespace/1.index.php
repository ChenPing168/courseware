<?php namespace cate;
header('Content-type:text/html;charset=utf-8');
function p(){
	echo '我是cate空间的p<br/>';
}
//调用当前空间的p函数
p();

namespace arc;
function p(){
	echo '我是arc空间的p<br/>';
}
//调用当前空间的p函数
p();
//调用cate空间的p函数
\cate\p();






 ?>