<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>这是 <?php echo $_POST['name'] ?>的简历</h2>
	<table border="1">
		<tr>
			<td>姓名：</td>
			<td><?php echo $_POST['name'] ?></td>
		</tr>
	</table>
</body>
</html>