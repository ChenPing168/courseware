<?php 
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




//2.将html文档中的所有a链接替换为http://www.houdunwang.com

$str = <<<str
<li class="ebox-i ebox-01">
		<h4>前端网址导航</h4>
		<p>扁平化设计、自定义颜色风格、多功能配置</p>
		<a class="btn btn-default btn-sm" target="_blank" href="http://www.daqianduan.com/nav">立即使用</a>
	</li>
	<li class="ebox-i ebox-02">
		<h4>产品-交互-设计</h4>
		<p>展示各种精彩炫酷的网站设计和用户体验良好的设计元素</p>
		<a class="btn btn-default btn-sm" target="_blank" href="http://www.daqianduan.com/design">开始学习</a>
	</li>
	<li class="ebox-i ebox-03">
		<h4>名企招聘</h4>
		<p>名企前端招聘大集合，有能量就释放出来吧</p>
		<a class="btn btn-default btn-sm" target="_blank" href="http://www.daqianduan.com/job">查看职位</a>
	</li>
	<li class="ebox-i ebox-04">
		<h4>Sublime Text 3</h4>
		<p>前端开发利器，全套快捷键和插件推荐</p>
		<a class="btn btn-default btn-sm" target="_blank" href="http://www.daqianduan.com/4820.html">开始使用</a>
	</li>
str;


// 创建目录移动函数
function move($source,$dest){
	//1.复制
	cp($source,$dest);
	//2.删除
	// del($source);
	
}
/**
 * [cp 复制函数]
 * @param  [type] $source [description]
 * @param  [type] $dest   [description]
 * @return [type]         [description]
 */
function cp($source,$dest){

}

//ppt的例子
function del($source){

}












 ?>