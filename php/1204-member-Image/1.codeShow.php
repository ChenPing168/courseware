<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<script src="jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
				//获得验证码图片的地址
				var imgSrc = $('#codeImg').attr('src');
				//点击让地址随机
				$('#codeImg,#codeA').click(function(){
					//设置验证码图片的地址
					$('#codeImg').attr('src',imgSrc + "?rand=" + Math.random());
				})
			})
		</script>
	</head>
	<body>
		<form action="" method="post">
			用户名： <input type="text" name="uname" id="" />
			<br />
			密码： <input type="password" name="password" id="" />
			<br />
			验证码： <input type="text" name="code" id="" />
			<img src="Code.class.php" id="codeImg"/>
			<a href="javascript:;" id="codeA">点击切换验证码</a>
			<br />
			<input type="submit" value="登陆"/>
		</form>
	</body>
</html>
