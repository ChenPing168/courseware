<?php /* Smarty version 2.6.26, created on 2015-12-21 11:31:23
         compiled from edit.php */ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../Common/header.php", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="box">
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">班级名称</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入班级" name="cname" required="" value="<?php echo $this->_tpl_vars['oldData']['cname']; ?>
">
  </div>
  <button type="submit" class="btn btn-success">编辑</button>
  <a href="index.php" class="btn btn-info">返回</a>
</form>
</div>	
	
	
	
	
	
	
	
</body>
</html>