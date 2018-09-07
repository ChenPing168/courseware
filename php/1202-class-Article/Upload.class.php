<?php 
include "../functions.php";
class Upload{
	//保留的错误信息
	public $error;
	//类型
	private $type;
	//大小
	private $size;
	
	public function __construct($type=array('jpg','png','gif'),$size=2000000){
		$this->type = $type;
		$this->size = $size;
	}
	
	//上传（只留给外部调用的唯一的一个方法）
	public function up(){
		//1.重组数组
		$arr = $this->resetArr();
		//2.筛选过滤
		foreach ($arr as $v) {
			//如果筛选不成功
			if(!$this->filter($v)){
				//返回假不走下面
				return false;
			}
		}
		//3.上传，返回上传路径
		$uploadPath = array();
		foreach ($arr as $v) {
			//返回上传路径，压入新数组
			$uploadPath[] = $this->move($v);
		}
		return $uploadPath;
	}
	//3.移动上传
	private function move($v){
		//上传路径
		$path = "./Upload/" . date('ymd') . '/';
		is_dir($path) || mkdir($path, 0777, true);
		//文件名
		$type = strrchr($v['name'], '.');
		$fileName = time() . mt_rand(0, 99999) . $type;
		//最终路径
		$dest = $path . $fileName;
		move_uploaded_file($v['tmp_name'], $dest);
		return $dest;
	}
	
	
	//2.过滤掉不合格的,这个方法需要返回true或者false
	private function filter($v){
		//获得类型
		$type = ltrim(strrchr($v['name'], '.'),'.');
		switch (true) {
			//判断是否有文件上传
			case $v['error'] == 4:
				$this->error = '没有文件上传';
				return false;
			//判断是否是合法文件上传
			case !is_uploaded_file($v['tmp_name']):
				$this->error = '不是通过http合法上传的文件';
				return false;
			//类型是否允许
			case !in_array($type, $this->type):
				$this->error = '上传类型不允许';
				return false;
			//判断大小是否允许
			case $v['size'] > $this->size:
				$this->error = '上传文件超过网站配置大小';
				return false;
			//error的4种错误
			case $v['error'] == 1:
				$this->error = '大小超过了 php.ini 中 upload_max_filesize 限制值';
				return false;
			
			default:
				return true;
				break;
		}
		
		
		
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
	//执行上传（参数会传递给构造方法）
	$upload = new Upload(array('zip'),100000);
	//如果有错误，输出错误
	$path = $upload->up();
	if(!$path){
		echo $upload->error;
	}else{
		p($path);
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
 		文件1 <input type="file" name="up[]" id="up" value="" />
 		<br />
 		文件1 <input type="file" name="up[]" id="up" value="" />
 		<br />
 		<input type="submit" value="上传"/>
 	</form>
 </body>
 </html>





