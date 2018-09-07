<?php 
	//让输出的内容更整齐
	echo '<pre>';
	//可以接收form表单中的内容
	print_r($_POST);
	echo '</pre>';

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
	
 	<form action="7.post.php?username=test" method="post">
 		用户名：<input type="text" name="username" id="">
 		<br>
 		密码: <input type="password" name="password" id="">
 		<br>
 		<input type="submit" value="注册">
 	</form>








 </body>
 </html>