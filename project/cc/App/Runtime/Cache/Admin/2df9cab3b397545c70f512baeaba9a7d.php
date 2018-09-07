<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="__ROOT__/Public/Bootstrap/Css/bootstrap.min.css" />
	<link rel="stylesheet" href="__ROOT__/Public/Uploadify/uploadify.css" />
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='__UPLOADIFY__/jquery.uploadify.js'></script>
	<style type="text/css">
	    .uploadify-button {
	        background-color: transparent;
	        border: none;
	        padding: 0;
	    }
	    .uploadify:hover .uploadify-button {
	        background-color: transparent;
	    }
	</style> 
</head>
<body>
	<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">

	<form action="" method='post'>
		<fieldset>
		<legend>添加商品品牌</legend>
		<table class="table table-bordered table-hover">
			<tr class="info">
				<td>品牌名称</td>
				<td colspan="2">
					<input type="text" name='bname'/>
				</td>
			</tr>
			<tr class="info">
				<td>品牌LOGO</td>
				<td>
					<input type="file" name='logo' id='logo'/>
				</td>
				<td>
					<div id='logo-wrap' style='display:none'></div>
				</td>
			</tr>
			<tr class="info">
				<td>是否热门</td>
				<td colspan="2">
					<input type="checkbox" name='ishot' value='1'/>
				</td>
			</tr>
			<tr>
				<td colspan='3' align='center'>
					<input type="submit" class="btn btn-primary" value="添加品牌" />
				</td>
			</tr>
		</table>
		</fieldset>
	</form>

	</div>
	</div>
	</div>

<script type="text/javascript">
	$(function() {
	    $("#logo").uploadify({
	    	fileTypeDesc : '请选择LOGO图片',
	    	uploadLimit : 1,
	    	fileTypeExts : '*.gif; *.jpeg; *.jpg; *.png',
	    	buttonImage : '__UPLOADIFY__/btn.png',
	    	width	: 120,
	        height  : 30,
	        swf		: '__UPLOADIFY__/uploadify.swf',
	        uploader: '<?php echo U("upload");?>',
	        //解决某些浏览器(主要是FF)Uploadify上传时丢失SESSION问题
	        formData : {'<?php echo session_name();?>' : '<?php echo session_id();?>'},
	        onUploadSuccess : function(file, data, response) {
	        	eval('data=' + data);
	        	if(data.status == 1){
	        		var str = '<img src="__UPLOAD__/Logo/' + data.name + '" width="100" height="100" />';
	        			str += '<input type="hidden" name="logo" value="' + data.name + '"/>';
        			$('#logo-wrap').empty().append(str).fadeIn(2000);
	        	}else{
	        		alert(data.msg);
	        	}
        	}
	    });
	});
</script>
</body>
</html>