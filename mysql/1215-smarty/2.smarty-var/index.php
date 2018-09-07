<?php 
date_default_timezone_set('PRC');
//载入smarty核心类
include './Smarty/Smarty.class.php';
//实例化Smarty对象
$smarty = new Smarty();
//模版目录
$smarty->template_dir = "template";
//编译目录
$smarty->compile_dir = "temp/compile";
//缓存目录
$smarty->cache_dir = "temp/cache";
//开始定界符 
$smarty->left_delimiter = "{{";
//结束定界符
$smarty->right_delimiter = "}}";

//分配变量，只有分配，模板才能使用变量
$result = array('webname'=>'后盾网');
$smarty->assign('result',$result);

$web = array(
	'web'=>array(
		'name'=>'houdun',
		'url'=>'www.houdunwang.com'
	)
);
$smarty->assign('web',$web);
define('ROOT_PATH', '我是root目录的常量');

//分配字母，用于测试转大小写
$letter = 'abcdefg';
$smarty->assign('letter',$letter);

//分配汉字，用于测试truncate截取
$chinese = '我是后盾学生';
$smarty->assign('chinese',$chinese);


//载入模板
$smarty->display('index.html');





 ?>

