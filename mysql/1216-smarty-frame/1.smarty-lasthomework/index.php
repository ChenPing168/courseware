<?php 
session_start();
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
//是否开启缓存
$smarty->caching = true;
//缓存时间
$smarty->cache_lifetime = 10;
//开始定界符 
$smarty->left_delimiter = "{{";
//结束定界符
$smarty->right_delimiter = "}}";

$smarty->assign('chinese','我是中国人');

//分页
$page = isset($_GET['page']) ? $_GET['page'] : 0;
//如果缓存失效，重新查询数据
if(!$smarty->is_cached('index.html',$_SERVER['REQUEST_URI'])){
	//查询数据库
	include_once './Model.class.php';
	$model = new Model;
	$data = $model->query("SELECT * FROM arc LIMIT {$page},1");
	$smarty->assign('data',$data);
}

//超级全局数组$_SERVER
//echo '<pre>';
//print_r($_SERVER);

//局部不缓存(固定写法)
$smarty->register_block("nocache", "nocache", false);
function nocache($params, $content, &$smarty){
	return $content;
}


//载入模板
//传递第二个参数，为了每一个分页生成独立的缓存文件
$smarty->display('index.html',$_SERVER['REQUEST_URI']);





 ?>

