<?php 
include "../../functions.php";
//编辑操作
//1.载入数据库
$data = include "./data.php";
//2.获得对应下标
$id = $_GET['id'];
//3.通过下标找到旧数据
$oldData = $data[$id];

//4.修改
//如果用户有提交
if(!empty($_POST)){
	//把之前的时间保存下来
	$_POST['time'] = $oldData['time'];
	//覆盖，修改
	//$data = array('a','b','c');
	//$data[1] = 'b123';
	$data[$id] = $_POST;
	//写入数据库
	$phpCode = "<?php return " . var_export($data,true) . "?>";
	file_put_contents('./data.php', $phpCode);
	//成功提示
	success('修改成功','index.php');
}


include "./tpl/edit.html";






