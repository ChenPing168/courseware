<?php 
/*$num = 1.9;
//向上取整
// echo ceil($num);
//向下取整
echo floor($num);*/

/*//获得最大值
// $arr = array(100,1,500,0,20);
// echo max($arr);
echo max(100,500,1);*/

/*//获得最小值
$arr = array(100,1,500,0,20);
echo min($arr);*/

//四舍五入
// $num = 1.5;
// echo round($num);
// //第二个参数是保留几位小数
// $num = 1.5123918273971823;
// echo round($num,4);

// //1-3的随机数，包括1和3
// echo mt_rand(1,3);

$colorArr = array('red','blue','yellow','purple','green');
$color = $colorArr[mt_rand(0,4)];


//2*2*2 指数表达式
echo pow(2, 3);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css" media="screen">
		body{
			background: <?php echo $color ?>;
		}
	</style>
</head>
<body>
	
</body>
</html>






