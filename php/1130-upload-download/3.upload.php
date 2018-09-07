<?php 
include "../functions.php";
if(!empty($_FILES)){
	//判断是否是一个合法的上传文件
	if(is_uploaded_file($_FILES['up']['tmp_name'])){
		//处理文件名，组合目录
		//上传目录
		$path = './Upload/' . date('y') . '/' . date('m') . '/' . date('d');
		is_dir($path) || mkdir($path, 0777, true);
		//获得类型
		$type = strrchr($_FILES['up']['name'], '.');
		//文件名称
		$fileName = time() . mt_rand(0, 999999) . $type;
		//组合完整目录
		$fullPath = $path . '/' . $fileName;
		//移动上传
		move_uploaded_file($_FILES['up']['tmp_name'], $fullPath);
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
 	<!--上传的时候需要加 enctype="multipart/form-data"-->
 	<form action="" method="post" enctype="multipart/form-data">
 		文件: <input type="file" name="up" id="" />
 		<input type="submit" value="上传"/>
 	</form>
 	
 	
 	
 	
 	
 </body>
 </html>