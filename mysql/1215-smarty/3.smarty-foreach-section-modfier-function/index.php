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

//载入模型类
include "./Model.class.php";
$model = new Model;
$data = $model->query("SELECT * FROM arc");
$smarty->assign('data',$data);

$chinese = '我是中国人，写好中国字';
$smarty->assign('chinese',$chinese);
//载入模板
$smarty->display('index.html');





 ?>

