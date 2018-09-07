<?php 
Route::get('/','Home/Index/index');
//访问内容页
Route::get('a{aid}.html','Home/Content/index');

Route::get('l{cid}_t{tid}_p{page}.html','Home/List/index');
//访问列表页
Route::get('l{cid}.html','Home/List/index');

//伪静态
// 1.打开httpd.conf 查找里面的allowOverride是不是all,因为all才支持.httaccess
// 2.找到httpd.conf里面的rewrite把前面的#去掉
// 3.重启wamp
// 4.在项目的根目录建立.htaccess
// 5.更改system/routes.php,在里面设置路由
// 6.更改页面的a连接地址
