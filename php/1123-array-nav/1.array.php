<?php 

$arr = array(
	array(
		'title' => '今天是周五',
		'click' => 100
	),
	array(
		'title' => '明天是周六',
		'click' => 200
	),
	array(
		'title' => '后天是周日',
		'click' => 500
	),
);

//可以省略$k
foreach ($arr as $v) {
	echo $v['click'] . '<br/>';
}









 ?>