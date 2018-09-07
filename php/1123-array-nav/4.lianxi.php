<?php 
// 使用key,current,next等函数结果while进行数组的遍历 操作
$arr = array('a','b','c');
while (key($arr) !== NULL) {
	//输出 键名=>键值<br/>
	echo key($arr) . '=>' . current($arr) . '<br/>';
	next($arr);
}
// 0=>a
// 1=>b
// 2=>c




 ?>