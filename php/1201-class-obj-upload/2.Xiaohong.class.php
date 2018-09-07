<?php 
header('Content-type:text/html;charset=utf-8');
//明白以下两点就ok
//1.public,private,protected几个的权限
//2.通过继承可以调用父类的方法


//都叫小红的人，形成一个类
class Xiaohong{
	//public 最开放的权限，
	//1.类的内部可以访问
	//2.类的外部可以访问
	//3.子类可以访问
	public $name = 'xiaohong';
	//private 私有的，
	//1.类的内部可以访问
	//2.类的外部不可以访问
	//3.子类不可以访问
	private $money= '100w';
	
	//proteced 受保护的，
	//1.类的内部可以访问
	//2.类的外部不可以访问
	//3.子类可以访问
	protected $car = 'BMW';
	
	public function getName(){
		//通过内部访问name
		echo $this->name;
	}
	
	public function getMoney(){
		//测试private能不能通过内部访问
		echo $this->money;
	}
	
	public function driveCar(){
		//测试protected能不能通过内部访问
		echo '开' . $this->car;
	}
}
$xh = new Xiaohong;
//测试public能不能通过内部访问
//$xh->getName();
//测试public能不能通过外访问
//echo $xh->name;
//测试private能不能通过内部访问
//$xh->getMoney();
//测试private能不能通过外部访问
//echo $xh->money;
//测试protected能不能通过内部访问
//$xh->driveCar();
//测试protected能不能通过外部访问
//echo $xh->car;

//小红女儿（Xiaohong的子类）
class Daughter extends Xiaohong{
	public function drive(){
		//测试protected能不能通过子类访问
		echo '开' . $this->car;
	}
	public function getAllMoney(){
		//测试private能不能通过子类访问
		echo $this->money;
	}
}
$xxh = new Daughter;
//测试protected能不能通过子类访问
//$xxh->drive();
//测试protected能不能通过外部访问
$xxh->getAllMoney();


//1.抽象性，把一类对象的相同特性抽取出来，形成一个类 (帅哥，把每一个具体的同学(对象)帅的特性抽出来)

//2.封装性,









 ?>