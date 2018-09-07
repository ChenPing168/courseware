<?php 
include "../functions.php";
//1.验证用户提交过来的邮箱与网址是否正确
/*//邮箱正则：
// $email = 'houdunwangmzy@163.com';
// $email = '410004417@qq.com';
// $email = '410004417@qq.net';
// $email = '410004417@sina.com.cn';
// $email = 'houdunwang-mzy@163.com';
$email = 'houdunwang_mzy@163.com';
$preg = "/^[0-9a-z]+[0-9a-z_-]?[0-9a-z]+@[0-9a-z]{2,6}\.(com|net|cn|com\.cn)$/is";
echo preg_match($preg, $email);*/


// 网址正则：
/*// $url = 'http://www.baidu.com';
// $url = 'https://www.baidu.com';
// $url = 'ftp://www.baidu.com';
// $url = 'www.baidu.com';
// $url = 'www.houdun-wang.com';
// $url = 'www.houdun_wang.com';
// $url = 'www.12306.com';
// $url = 'bbs.baidu.com';
// $url = '123.baidu.com';
// $url = 'baidu.com';
// $url = 'baidu.com.cn';
// $url = 'baidu.cn';
$url = 'baidu.net';

$preg = "/^((http|https|ftp):\/\/)?([0-9a-z]{2,10}\.)?[0-9a-z_-]{2,20}\.(com|cn|net|com\.cn)$/i";
echo preg_match($preg, $url);*/





/*//2.将html文档中的所有a链接替换为http://www.houdunwang.com

$str = <<<str
<li class="ebox-i ebox-01">
		<h4>前端网址导航</h4>
		<p>扁平化设计、自定义颜色风格、多功能配置</p>
		<a class="btn btn-default btn-sm" target="_blank" href="http://www.daqianduan.com/nav">立即使用</a>
	</li>
	<li class="ebox-i ebox-02">
		<h4>产品-交互-设计</h4>
		<p>展示各种精彩炫酷的网站设计和用户体验良好的设计元素</p>
		<a class="btn btn-default btn-sm" target="_blank" href='http://www.daqianduan.com/design'>开始学习</a>
	</li>
str;
//正则替换
$preg = "/<a(.*?)href=['\"].*?['\"]/";
echo preg_replace($preg, '<a\1href="http://www.houdunwang.com"', $str);*/



//3.创建目录移动函数
function move($source,$dest){
	//1.复制
	cp($source,$dest);
	//2.删除
	// del($source);
	
}
//把a目录移动到b目录下面
move('./a','./b/a');
/**
 * [cp 复制函数]
 * @param  [type] $source [description]
 * @param  [type] $dest   [description]
 * @return [type]         [description]
 */
function cp($source,$dest){
	//如果不是一个目录则返回false
	if(!is_dir($source)) return false;
	//如果目标不是一个目录则创建它
	is_dir($dest) || mkdir($dest,0777,true);
	foreach (glob($source . '/*') as $v) {
		// ./a/1.index.php    $v
		// ./b/a/1.index.php  $newDest
		// ./a/zuoye          $v
		// ./b/a/zuoye        $newDest
		$newDest = $dest . '/' . basename($v);
		//如果是目录则递归，如果是文件则copy
		is_dir($v) ? cp($v,$newDest) : copy($v, $newDest);
	}
	return true;
}

//ppt的例子
function del($source){

}












 ?>