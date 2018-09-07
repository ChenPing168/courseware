<?php 
include "./get.php";
function delMenu(){
	$url = "https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=" . getToken();
	$msg = file_get_contents($url);
	echo $msg;
}
delMenu();


 ?>