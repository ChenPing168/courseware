<?php 
include "../functions.php";
if(!empty($_POST)){
	//拿到随机生成的验证码
	$code = include "./codeStr.php";
	//把用户提交过来的验证码转为小写，进行比对，这样就做到了不区分大小写
	if(strtolower($_POST['code']) != $code){
		success('验证码错误', '5.codeShow.php');
	}else{
		success('验证码正确', '5.codeShow.php');
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form action="" method="post">
			用户名： <input type="text" name="uname" id="" />
			<br />
			密码： <input type="password" name="password" id="" />
			<br />
			验证码： <input type="text" name="code" id="" />
			<img src="./4.code.php"/>
			<a href="">点击切换验证码</a>
			<br />
			<input type="submit" value="登陆"/>
		</form>
	</body>
</html>
