<?php 
include "../functions.php";
class Upload{
	//上传（只留给外部调用的唯一的一个方法）
	public function up(){
		//1.重组数组
		$arr = $this->resetArr();
		//2.筛选过滤
		foreach ($arr as $v) {
			//如果筛选成功
			if($this->filter($v)){
				//3.上传
				$this->move($v);
			}
		}
		
	}
	//3.移动上传
	private function move($v){
		//move_uploaded_file($filename, $destination)
	}
	
	
	//2.过滤掉不合格的,这个方法需要返回true或者false
	private function filter($v){
		//1.是不是一个合法的上传文件
		//2.类型是否允许
		//3.判断大小是否允许
		//4.error的4种错误
	}
	
	
	//重组数组
	private function resetArr(){
		$temp = array();
		foreach ($_FILES as $v) {
			//如果是多文件上传
			if(is_array($v['name'])){
				foreach ($v['name'] as $key => $name) {
					$temp[] = array(
						'name' => $name,
						'type' => $v['type'][$key],
						'tmp_name' => $v['tmp_name'][$key],
						'error' => $v['error'][$key],
						'size' => $v['size'][$key],
					);
				}
			}else{//单文件上传
				$temp[] = $v;
			}
			
		}
		return $temp;
	}
	
	
	
	
}
//如果用户上传的时候
if(!empty($_FILES)){
	//执行上传
	$upload = new Upload;
	$upload->up();
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
 		文件1 <input type="file" name="up[]" id="up" value="" />
 		<br />
 		文件2 <input type="file" name="up[]" id="up" value="" />
 		<input type="submit" value="上传"/>
 	</form>
 </body>
 </html>





