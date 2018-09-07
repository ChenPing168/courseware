<?php /* Smarty version 2.6.26, created on 2015-12-15 12:25:36
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'arc', 'index.html', 9, false),)), $this); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<ul>
			<?php $this->_tag_stack[] = array('arc', array('rows' => '3','cid' => '0')); $_block_repeat=true;smarty_block_arc($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<li>
					<span>[$field.aid]</span>
					<a href="">[$field.t]</a>
				</li>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_arc($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</ul>
	</body>
</html>