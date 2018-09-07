<?php 
include "../functions.php";
p($_FILES);
//多文件上传



 ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8" />
 	<title>Document</title>
 </head>
 <body>
 	<form action="" method="post" enctype="multipart/form-data">
 		文件1：<input type="file" name="up[]" id="" />
 		<br />
 		文件2：<input type="file" name="up[]" id="" />
 		<input type="submit" value="上传"/>
 	</form>
 	
 	
 	
 	
 	
 	
 	
 	
 </body>
 </html>