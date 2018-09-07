<?php 
//1.判断App目录是否存在
//2.在Lib目录建立了Controller.php
//3.更改Hdphp\Common\IndexControll.php,让其继承总控制器
//4.在Hd.php中的loadCore方法增加载入总控制器
//5.在Hdphp目录下面建立Org目录，放第三方工具包(Smarty...)
//6.在Hdphp\Lib建立SmartyView.php它是Smarty和框架的桥梁
//7.在SmartyView里面建立构造函数，实例化Smarty
//8.在SmartyView里面建立display，assign，is_cached..
//9.在Hd.php中的loadCore方法增加载入Smarty和SmartyView两个类
//10.更改Lib目录里面的Controller.php，让其继承SmartyView
//11.在Hdphp/Common目录增加index.php，为了将来复制过去作为默认的首页
//12.








 ?>