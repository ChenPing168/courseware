<?php 
include "./function.php";

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


// foreach ($arr as $k => $v) {
// 	p($v['title']);
// }


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>标题</th>
			<th>点击次数</th>
		</tr>
		<?php foreach($arr as $k => $v){ ?>
			<tr>
				<td><?php echo $v['title'] ?></td>
				<td></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>









