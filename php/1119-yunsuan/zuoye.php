<?php 
	//接收数字num1和num2
	$num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
	$num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;
	
	//接收运算符
	$opreation = isset($_POST['opreation']) ? $_POST['opreation'] : '+';

	switch ($opreation) {
		case '+':
			$result = $num1 + $num2;
			break;
		case '-':
			$result = $num1 - $num2;
			break;
		
		default:
			# code...
			break;
	}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h2>结果：<?php echo $result ?> </h2>
 	<form action="" method="post">
		数字1：<input type="text" name="num1" id="">
		<br>
		数字2：<input type="text" name="num2" id="">
		<br>
		运算符：
		+ <input type="radio" name="opreation" value="+" checked="">
		- <input type="radio" name="opreation" value="-">
		* <input type="radio" name="opreation" value="*">
		/ <input type="radio" name="opreation" value="/">
		<br>
		<input type="submit" value="计算">
 	</form>










 </body>
 </html>