<?php /* Smarty version 2.6.26, created on 2015-12-17 12:16:57
         compiled from index.php */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎使用C58框架</title>
    <style type="text/css">
        body{
            background: #efefef;
        }
        div#main {
            padding: 30px 50px;
            font-family: "Microsoft Yahei", Helvetica, arial, sans-serif;
            margin-top: 90px;
        }

        div#main h1 {
            font-size: 200px;
            margin: 0px;
            color:#bbb;
            text-align: center;
        }

        div#main div.hdphp {
            font-size: 38px;
            color:#bbb;
            text-align: center;
        }
    </style>
</head>
<body>
	<table border="1" cellspacing="" cellpadding="">
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		<tr><td><?php echo $this->_tpl_vars['v']['aid']; ?>
</td><td><?php echo $this->_tpl_vars['v']['t']; ?>
</td></tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
	<img src="index.php?a=code"/>
    <div id="main">
        <h1> √  </h1>
        <div class="hdphp">
            C58框架為你而生
        </div>
    </div>
</body>
</html>