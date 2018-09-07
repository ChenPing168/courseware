<?php /* Smarty version 2.6.26, created on 2015-12-16 10:29:02
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'css', 'index.html', 6, false),array('block', 'nocache', 'index.html', 10, false),array('modifier', 'color', 'index.html', 18, false),)), $this); ?>
<?php $this->_cache_serials['temp/compile/%%77^774^774BE9C9%%index.html.inc'] = 'b042c75754ed8c96efa189f5578855dd'; ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<?php echo smarty_function_css(array('file' => "./template/index.css"), $this);?>

</head>
<body>
	<!--登陆退出，用局部不缓存-->
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:b042c75754ed8c96efa189f5578855dd#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($_SESSION['uname']): ?>
			欢迎<?php echo $_SESSION['uname']; ?>
 回来! <a href="./out.php">退出</a>
		<?php else: ?>
			<a href="./login.php">登陆</a>
		<?php endif; ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:b042c75754ed8c96efa189f5578855dd#0}'; endif;?>
	<hr />
	<?php echo ((is_array($_tmp=$this->_tpl_vars['chinese'])) ? $this->_run_mod_handler('color', true, $_tmp, 'red') : smarty_modifier_color($_tmp, 'red')); ?>

	<hr />
	<?php echo time(); ?>

	<hr />
	<table border="1" cellspacing="" cellpadding="">
		<tr>
			<th>id</th>
			<th>标题</th>
			<th>操作</th>
		</tr>
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['v']['aid']; ?>
</td>
			<td><?php echo $this->_tpl_vars['v']['t']; ?>
</td>
			<td>
				<a href="">编辑</a>
				<a href="del.php?aid=<?php echo $this->_tpl_vars['v']['aid']; ?>
">删除</a>
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
	
	
	
	
	
	
	
	
	
</body>
</html>