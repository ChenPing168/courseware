<?php 
include "../../functions.php";
//删除操作
//1.载入数据库
$data=include"./data.php";
//2.获得要删除的下标
$id=$_GET['id'];
//3.删除对应数据
unset($data[$id]);
//4.重新写入数据库
$newdate ="<?php return ".var_export($data,true)." ?>";
file_put_contents("./data.php", $newdate);
//5.成功提示
$str=<<<str
   <script>
   alert('删除成功');
   location.href='./index.php';
   </script>
str;
echo $str;










 ?>