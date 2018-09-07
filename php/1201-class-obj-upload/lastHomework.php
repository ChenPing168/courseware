<?php 
include "../functions.php";
//作业
//1.多文件上传和下载
foreach ($_FILES['up']['tmp_name'] as $k => $tmpName) {
	if(is_uploaded_file($tmpName)){
		//'./Upload/151201/12312312313.jpg'
		//上传目录
		$path = './Upload/' . date('ymd') . '/';
		is_dir($path) || mkdir($path,0777,true);
		//获得类型
		$name = $_FILES['up']['name'][$k];
		$type = strrchr($name, '.');
		//处理文件名
		$fileName = time() . mt_rand(0, 99999) . $type;
		//完整路径
		$fullPath = $path . $fileName;
		//移动上传
		move_uploaded_file($tmpName, $fullPath);
	}
}



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
 		<br />
 		<input type="submit" value="上传"/>
 	</form>
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 </body>
 </html>