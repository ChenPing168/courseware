<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
	    <!-- Loading Bootstrap -->
	    <link href="Public/Admin/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
	    <!-- Loading Flat UI -->
	    <link href="Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">
	    <link href="Public/Admin/Flat/docs/assets/css/demo.css" rel="stylesheet">
	    <link rel="shortcut icon" href="Public/Admin/Flat/img/favicon.ico">
	    	<!--载入验证js-->
	    	<link rel="stylesheet" type="text/css" href="Public/validate/mzyValidate.css"/>
	    	<script src="Public/validate/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
	    	<script src="Public/validate/mzyValidate.js" type="text/javascript" charset="utf-8"></script>
	    	<style type="text/css">
	    		.error_input{
				border: 2px solid #f00;
				padding: 2px;
				box-shadow: 0 0 3px #FF0000;
			}
	    	</style>
	</head>
	<body>
		<!--mzy_validate(当前form表单对象,提交地址,错误的input样式(可以不填),错误提示样式1和2(可以不填，默认是1))-->
		<form method="post" onsubmit="return mzy_validate(this,'<?php echo U('add')?>','error_input',2)">
		<div class="alert alert-success">添加分类</div>
		<div class="form-group">
			<label for="exampleInputEmail1">分类名称</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类名称"  name="cname" rule="required" msg="请输入分类名称">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">所属分类</label>
			<select name="pid" class="form-control">
				<option value="0">顶级分类</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">分类标题</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类标题"  name="ctitle" rule="required|minlen:2" msg="请输入分类标题|分类标题不得少于2个字">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">分类关键字</label>
			<textarea name="ckeywords" rows="5" cols=""  class="form-control" placeholder="请输入分类关键字"></textarea>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">分类描述</label>
			<textarea name="cdes" rows="5" cols=""  class="form-control" placeholder="请输入分类描述" rule="http" msg="您输入的不是一个网址"></textarea>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">分类排序</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类排序"  name="csort" value="100" rule="regexp:/^\d+$/" msg="您输入的不是一个数字">
		</div>
		<button class="btn btn-primary btn-block" type="submit"> 确定 </button>
		</form>
	</body>
</html>
