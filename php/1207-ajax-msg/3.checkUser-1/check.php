<?php 
//检测用户名是否存在
if($_POST['n'] == 'admin'){
	echo '<span style="color:red">用户名已存在</span>';
}else{
	echo '<span style="color:green">用户名可以注册</span>';
}

 ?>