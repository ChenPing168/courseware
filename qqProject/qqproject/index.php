<?php

//调试模式
define('DEBUG', true);

//定义入口文件
define('APP_PATH','App');
//注意关闭框架session
require "./Connect2.1/API/qqConnectAPI.php";
//引入框架
require 'Hdphp/Hdphp.php';