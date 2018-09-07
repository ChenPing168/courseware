<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<!--获得下载目录的所有文件-->
		<?php $dir = glob('./download/*'); ?>
		<table border="1" cellspacing="" cellpadding="">
			<tr>
				<th>文件名</th>
				<th>下载</th>
			</tr>
			<?php foreach($dir as $v): ?>
				<tr>
					<td><?php echo basename($v) ?></td>
					<td><a href="./down.php?file=<?php echo $v ?>">下载</a></td>
				</tr>
			<?php endforeach ?>
		</table>
	</body>
</html>
