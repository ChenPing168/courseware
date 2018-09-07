<?php /* Smarty version 2.6.26, created on 2015-12-21 12:18:17
         compiled from index.php */ ?>
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
		<div class="alert alert-danger" role="alert">学生管理</div>
		<table class="table table-hover">
	  		<tr>
	  			<th width="80">学生ID</th>
	  			<th>姓名</th>
	  			<th>班级</th>
	  			<th width="230">操作</th>
	  		</tr>
	  		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
	  		<tr>
	  			<td><?php echo $this->_tpl_vars['v']['sid']; ?>
</td>
	  			<td><?php echo $this->_tpl_vars['v']['sname']; ?>
</td>
	  			<td><?php echo $this->_tpl_vars['v']['cname']; ?>
</td>
	  			<td>
	  				<a href="" class="btn btn-primary btn-sm">编辑</a>
	  				<a href="javascript:if(confirm('确定删除吗？')) location.href='';" class="btn btn-danger btn-sm">删除</a>
	  			</td>
	  		</tr>
	  		<?php endforeach; endif; unset($_from); ?>
		</table>
		<a href="index.php" class="btn btn-primary btn-sm">返回到首页</a>
	</div>
	
	
	
	
	
	
	
	
</body>
</html>