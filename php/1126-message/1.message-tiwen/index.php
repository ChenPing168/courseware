<?php 
//载入函数
include "../../functions.php";
//1.准备好数据库 data.php(自己预先创建一个data.php文件)
//2.载入数据库（文件里面必须有return）
$data=include './data.php';
//3.如果用户提交
if(!empty($_POST)){
	//4.给数据库数组追加一条
	$_POST['time']=date('Y-m-d H:i:s');
	$data[]=$_POST;
	//5.代码合法化
	$phpCode = "<?php return " . var_export($data,true) . "?>";
	//6.写入数据库
	file_put_contents("./data.php", $phpCode);
	//7.成功提示
	$str = <<<str
	<script>
	alert('添加成功！');
	location.href='./index.php';
	</script>
str;
	echo $str;
}	

//载入首页面（放到最下面）
include './tpl/index.html';












 ?>