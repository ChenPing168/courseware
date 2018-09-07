<?php 
include "../../functions.php";
//删除操作
//1.载入数据库
$data = include "./data.php";
//2.获得要删除的下标
$id = $_GET['id'];
//3.删除对应数据
unset($data[$id]);
//4.重新写入数据库
$phpCode = "<?php return " . var_export($data,true) . "?>";
file_put_contents('./data.php', $phpCode);
//5.成功提示
success('删除成功','./index.php');










 ?>