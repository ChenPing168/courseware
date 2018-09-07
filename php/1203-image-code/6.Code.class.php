<?php 
class Code{
	//保存画布的资源
	private $img;
	//验证码画布的宽
	private $width;
	//验证码画布的高
	private $height;
	//验证码长度
	private $codeLen;
	
	public function __construct($width=200,$height=80,$codeLen=4){
		$this->width = $width;
		$this->height = $height;
		$this->codeLen = $codeLen;
	}
	//提供给外部调用显示的
	public function show(){
		//1.发送头部
		header('Content-type:image/png');
		//2.创建画布,调色并且填充颜色
		$this->createBg();
		//3.写字
		$this->wirte();
		//4.创建干扰
		$this->makeTrouble();
		//5.输出图像
		imagepng($this->img);
		//6.销毁图像
		imagedestroy($this->img);
	}
	//创建干扰
	private function makeTrouble(){
		
	}
	//写字
	private function wirte(){
		
	}
	//创建背景
	private function createBg(){
		$this->img = imagecreatetruecolor($this->width, $this->height);
	}
	
	
}
//使用验证码
$code = new Code(100,20,1);
$code->show();

 ?>