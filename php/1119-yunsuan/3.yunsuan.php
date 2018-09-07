<?php 
header('Content-type:text/html;charset=utf-8');
/*$a = 1;
$b = 1;
echo $a + $b;*/

/*$a = 1;
$b = '1';
//全等，必须值相等，类型相等
if($a === $b){
	echo 'yes';
}else{
	echo 'no';
}*/

//三元表达式
/*$page = isset($_GET['page']) ? $_GET['page'] : 0;
echo $page;*/



/*$a = true;
$b = false;
//&& 是两边都成立
if($a && $b){
	echo 'yes';
}else{
	echo 'no';
}

//|| 只要有一个成立就为真
if($a || $b){
	echo 'yes';
}else{
	echo 'no';
}*/


/*$str = '我爱';
//$str = $str . '后盾网';
$str .= '后盾网';
echo $str;*/


/*$a = 1;
while ($a <= 10) {
	echo $a;
	$a++;
}*/


/*for ($i=0; $i < 5; $i++) { 
	echo $i . '<br/>';
}
*/
//三元表达式
$action = isset($_GET['a']) ? $_GET['a'] : 'index';
//swtich判断
switch ($action) {
	case 'index':
		echo '现在访问的是首页';
		break;

	case 'add':
		echo '现在访问的是添加页';
		break;
	
	case 'del':
		echo '您现在是删除动作';
		break;
	
	default:
		echo '您访问的页面不存在';
		break;
}









 ?>