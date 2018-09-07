<?php 
/*$path = './a/b/index.html';
$path = './a/b/c';
//返回路径的最后一部分
echo basename($path);*/

//返回路径的除了最后一部分的部分
/*$path = './a/b/index.html';
$path = './a/b/c/';
echo dirname($path);
*/

//获得当前的目录
// echo dirname(__FILE__);

//判断文件是否存在
// $bool = file_exists('../php5.chm');
// var_dump($bool);


//判断是否是一个目录
// $bool = is_dir('../1127');
// var_dump($bool);

//创建目录
//0777 代表最高权限
//true 代表递归创建
if(!is_dir('./temp/a/b')){
	mkdir('./temp/a/b',0777,true);
}










 ?>