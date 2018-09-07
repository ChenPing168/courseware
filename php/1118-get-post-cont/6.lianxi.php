<?php 
header('Content-type:text/html;charset=utf-8');
// 根据$_GET['page'] 输出你将看到XX页
//你的地址?page=3
echo '您看到' . $_GET['page'] . '页';

 ?>