<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		if(true){
			echo '<h2>yes</h2>';
		}else{
			echo '<h2>no</h2>';
		}
	?>
	<hr>
	<!-- 混排写法 -->
	<?php if(true){ ?>
		<h2>yes</h2>
	<?php }else{ ?>
		<h2>no</h2>
	<?php } ?>









</body>
</html>