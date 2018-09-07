<?php /* Smarty version 2.6.26, created on 2015-12-21 12:17:49
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
		<div class="alert alert-success" role="alert">班级管理</div>
		<table class="table table-hover">
	  		<tr>
	  			<th width="80">班级ID</th>
	  			<th>名称</th>
	  			<th width="230">操作</th>
	  		</tr>
	  		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
	  		<tr>
	  			<td><?php echo $this->_tpl_vars['v']['cid']; ?>
</td>
	  			<td><?php echo $this->_tpl_vars['v']['cname']; ?>
</td>
	  			<td>
	  				<a href="?c=Stu&a=add&cid=<?php echo $this->_tpl_vars['v']['cid']; ?>
" class="btn btn-info btn-sm">添加学生</a>
	  				<a href="?a=edit&cid=<?php echo $this->_tpl_vars['v']['cid']; ?>
" class="btn btn-primary btn-sm">编辑</a>
	  				<a href="javascript:if(confirm('确定删除吗？')) location.href='?a=del&cid=<?php echo $this->_tpl_vars['v']['cid']; ?>
';" class="btn btn-danger btn-sm">删除</a>
	  			</td>
	  		</tr>
	  		<?php endforeach; endif; unset($_from); ?>
		</table>
		<a href="?a=add" class="btn btn-success btn-block">添加班级</a>
		<a href="?c=Stu" class="btn btn-primary btn-block">显示全部学生</a>
	</div>
	
	
	
	
	
	
	
	
</body>
</html>