<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<meta property="qc:admins" content="4540233135543161512462521510563757110272534" />
</head>
<body>
	<?php if(isset($_SESSION['uid']) && isset($_SESSION['nickname'])): ?>
		 欢迎 <?php echo $_SESSION['nickname'] ?> 回来！ <a href="">退出</a>
	<?php else: ?>
		<a href="{{U('Index/login')}}">qq登陆</a>
	<?php endif ?>
	
</body>
</html>