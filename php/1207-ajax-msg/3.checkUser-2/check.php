<?php 
//检测用户名是否存在
if($_POST['n'] == 'admin'){
	//把php的变量变为json形式
	//在js中就相当于 var phpData = {status:false} phpData.status
	echo json_encode(array('status'=>false));
}else{
	echo json_encode(array('status'=>true));
}

 ?>