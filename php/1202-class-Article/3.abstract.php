<?php 
//抽象类（作为了解）
//声明交通工具类
abstract class Tool{
	//必须让子类重写
	abstract protected function sport();
	//普通方法
	public function test(){
		echo 'test';
	}
}
//飞机类
class Plane extends Tool{
	public function sport(){
		echo 'fly';
	}
}
//$obj = new Plane;
//$obj->sport();

class Car extends Tool{
	public function sport(){
		echo 'run';
	}
}
$obj = new Car;
$obj->sport();
$obj->test();

 ?>