<?php /* Smarty version 2.6.26, created on 2015-12-15 11:28:42
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'jiequ', 'index.html', 122, false),array('function', 'js', 'index.html', 125, false),)), $this); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<!--载入公共头部-->
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!--foreach循环示例-->
	<table border="1" cellspacing="" cellpadding="">
		<tr>
			<th>id</th>
			<th>标题</th>
			<th>操作</th>
		</tr>
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['v']['aid']; ?>
</td>
				<td><?php echo $this->_tpl_vars['v']['t']; ?>
</td>
				<td>
					<a href="">编辑</a>
					<a href="">删除</a>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
	<hr />
	<!--section基本循环示例-->
	<table border="1" cellspacing="" cellpadding="">
		<tr>
			<th>id</th>
			<th>标题</th>
			<th>操作</th>
		</tr>
		<!--
		loop要循环谁
		name调取数据时的下标
		start开始位置
		max截取多少条
		step跳步
		-->
		<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['start'] = (int)1;
$this->_sections['n']['max'] = (int)6;
$this->_sections['n']['step'] = ((int)2) == 0 ? 1 : (int)2;
$this->_sections['n']['show'] = true;
if ($this->_sections['n']['max'] < 0)
    $this->_sections['n']['max'] = $this->_sections['n']['loop'];
if ($this->_sections['n']['start'] < 0)
    $this->_sections['n']['start'] = max($this->_sections['n']['step'] > 0 ? 0 : -1, $this->_sections['n']['loop'] + $this->_sections['n']['start']);
else
    $this->_sections['n']['start'] = min($this->_sections['n']['start'], $this->_sections['n']['step'] > 0 ? $this->_sections['n']['loop'] : $this->_sections['n']['loop']-1);
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = min(ceil(($this->_sections['n']['step'] > 0 ? $this->_sections['n']['loop'] - $this->_sections['n']['start'] : $this->_sections['n']['start']+1)/abs($this->_sections['n']['step'])), $this->_sections['n']['max']);
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
			<tr>
				<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['aid']; ?>
</td>
				<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['t']; ?>
</td>
				<td>
					<a href="">编辑</a>
					<a href="">删除</a>
				</td>
			</tr>
		<?php endfor; endif; ?>
	</table>
	
	<hr />
	<!--section第一条变红示例-->
	<table border="1" cellspacing="" cellpadding="">
		<tr>
			<th>id</th>
			<th>标题</th>
			<th>操作</th>
		</tr>
		<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
			<!--如果是第一条数据-->
			<?php if ($this->_sections['n']['first']): ?>
				<!--字体颜色变红-->
				<tr style="color: red;">
					<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['aid']; ?>
</td>
					<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['t']; ?>
</td>
					<td>
						<a href="">编辑</a>
						<a href="">删除</a>
					</td>
				</tr>
			<?php else: ?>
				<!--其余不变-->
				<tr>
					<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['aid']; ?>
</td>
					<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['t']; ?>
</td>
					<td>
						<a href="">编辑</a>
						<a href="">删除</a>
					</td>
				</tr>
			<?php endif; ?>
		<?php endfor; endif; ?>
	</table>
	
	<hr />
	<!--section前3条变红示例-->
	<table border="1" cellspacing="" cellpadding="">
		<tr>
			<th>id</th>
			<th>标题</th>
			<th>操作</th>
		</tr>
		<?php unset($this->_sections['n']);
$this->_sections['n']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['n']['name'] = 'n';
$this->_sections['n']['show'] = true;
$this->_sections['n']['max'] = $this->_sections['n']['loop'];
$this->_sections['n']['step'] = 1;
$this->_sections['n']['start'] = $this->_sections['n']['step'] > 0 ? 0 : $this->_sections['n']['loop']-1;
if ($this->_sections['n']['show']) {
    $this->_sections['n']['total'] = $this->_sections['n']['loop'];
    if ($this->_sections['n']['total'] == 0)
        $this->_sections['n']['show'] = false;
} else
    $this->_sections['n']['total'] = 0;
if ($this->_sections['n']['show']):

            for ($this->_sections['n']['index'] = $this->_sections['n']['start'], $this->_sections['n']['iteration'] = 1;
                 $this->_sections['n']['iteration'] <= $this->_sections['n']['total'];
                 $this->_sections['n']['index'] += $this->_sections['n']['step'], $this->_sections['n']['iteration']++):
$this->_sections['n']['rownum'] = $this->_sections['n']['iteration'];
$this->_sections['n']['index_prev'] = $this->_sections['n']['index'] - $this->_sections['n']['step'];
$this->_sections['n']['index_next'] = $this->_sections['n']['index'] + $this->_sections['n']['step'];
$this->_sections['n']['first']      = ($this->_sections['n']['iteration'] == 1);
$this->_sections['n']['last']       = ($this->_sections['n']['iteration'] == $this->_sections['n']['total']);
?>
			<!--如果是前三条数据-->
			<?php if ($this->_sections['n']['index'] < 3): ?>
				<!--字体颜色变红-->
				<tr style="color: red;">
					<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['aid']; ?>
</td>
					<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['t']; ?>
</td>
					<td>
						<a href="">编辑</a>
						<a href="">删除</a>
					</td>
				</tr>
			<?php else: ?>
				<!--其余不变-->
				<tr>
					<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['aid']; ?>
</td>
					<td><?php echo $this->_tpl_vars['data'][$this->_sections['n']['index']]['t']; ?>
</td>
					<td>
						<a href="">编辑</a>
						<a href="">删除</a>
					</td>
				</tr>
			<?php endif; ?>
		<?php endfor; endif; ?>
	</table>
	<hr />
	<!--自定义变量调节器jiequ-->
	<?php echo ((is_array($_tmp=$this->_tpl_vars['chinese'])) ? $this->_run_mod_handler('jiequ', true, $_tmp, 3) : smarty_modifier_jiequ($_tmp, 3)); ?>

	
	<!--载入js-->
	<?php echo smarty_function_js(array('file' => "./template/index.js"), $this);?>

	
	
	
	
	
	
	
	
	
</body>
</html>