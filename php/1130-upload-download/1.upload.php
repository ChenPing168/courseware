<?php 
include "../functions.php";
//上传打印的数组
p($_FILES);

 ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8" />
 	<title>Document</title>
 </head>
 <body>
 	<!--上传的时候需要加 enctype="multipart/form-data"-->
 	<form action="" method="post" enctype="multipart/form-data">
 		文件: <input type="file" name="up" id="" />
 		<input type="submit" value="上传"/>
 	</form>
 	
 	
 	
 	
 	
 </body>
 </html>