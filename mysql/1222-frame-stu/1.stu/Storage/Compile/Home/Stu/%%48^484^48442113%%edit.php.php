<?php /* Smarty version 2.6.26, created on 2015-12-22 09:52:47
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
    <label for="exampleInputEmail1">学生名称</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入姓名" name="sname" required="" value="<?php echo $this->_tpl_vars['oldData']['sname']; ?>
">
  </div>
  <input type="hidden" name="sid" value="<?php echo $_GET['sid']; ?>
"/>
  <button type="submit" class="btn btn-success">编辑</button>
  <a href="index.php?c=Stu" class="btn btn-info">返回</a>
</form>
</div>	
	
	
	
	
	
	
	
</body>
</html>