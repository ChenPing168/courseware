<?php 
//开启session
session_start();
//清除session
session_unset();
session_destroy();
//跳转
header('Location:index.php');

 ?>