<?php /* Smarty version 2.6.26, created on 2015-12-15 09:58:37
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.html', 22, false),array('modifier', 'default', 'index.html', 25, false),array('modifier', 'upper', 'index.html', 28, false),array('modifier', 'lower', 'index.html', 28, false),array('modifier', 'truncate', 'index.html', 31, false),)), $this); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
				首页
		<hr />
		<?php echo $this->_tpl_vars['result']['webname']; ?>

		<hr />
		<?php echo $this->_tpl_vars['web']['web']['url']; ?>

		<hr />
		<!--获得get参数-->
		<?php echo $_GET['aid']; ?>

		<hr />
		<!--获得常量-->		
		<?php echo @ROOT_PATH; ?>

		<hr />
		<!--当前时间,格式化时间-->
		<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%y-%m-%d %H:%M:%S') : smarty_modifier_date_format($_tmp, '%y-%m-%d %H:%M:%S')); ?>

		<hr />
		<!--默认值-->
		<?php echo ((is_array($_tmp=@$this->_tpl_vars['d'])) ? $this->_run_mod_handler('default', true, $_tmp, '我是$d的默认值') : smarty_modifier_default($_tmp, '我是$d的默认值')); ?>

		<hr />
		<!--把变量转为大写然后再转成小写-->
		<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['letter'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>

		<hr />
		<!--截取英文字符串-->
		<?php echo ((is_array($_tmp=$this->_tpl_vars['letter'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 6) : smarty_modifier_truncate($_tmp, 6)); ?>

		<hr />
		<!--截取中文字符串-->
		<?php echo ((is_array($_tmp=$this->_tpl_vars['chinese'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 9) : smarty_modifier_truncate($_tmp, 9)); ?>

		<hr />
		<!--用literal标签包裹的代码不会解析-->
		<?php echo '
			手册说明：截取字符串的变量调节器是truncate
			<br />
			例：{{$letter|truncate:6}}
		'; ?>

		<hr />
		<!--if写法-->
		<?php if ($this->_tpl_vars['web']['web']['name'] == 'houdun' && $this->_tpl_vars['web']['web']['url'] == 'www.houdunwang.com'): ?>
			是后盾网
		<?php else: ?>
			不是后盾网
		<?php endif; ?>
		
		
		
	</body>
</html>



