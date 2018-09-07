<?php 
//阶乘
//2的阶乘 结果是：2   2*1
//3的阶乘就相当于3*2的阶乘 结果：6   3*2*1

echo facto(3);
function facto($num){
	if($num > 1){
		//(3的阶乘) = 3 * facto(2)(2的阶乘)
		//(2的阶乘) = 2 * facto(1)(1的阶乘)
		$result = $num * facto($num - 1);
	}else{
		//(1的阶乘) = 1;
		$result = 1;
	}
	return $result;
}






 ?>