<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>

	<link rel="stylesheet" href="__ROOT__/Public/Bootstrap/Css/bootstrap.min.css" />
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<link rel="stylesheet" href="__UPLOADIFY__/uploadify.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='__UPLOADIFY__/jquery.uploadify.js'></script>
	<script type="text/javascript" src='__ROOT__/Public/Ueditor/ueditor.config.js'></script>
	<script type="text/javascript" src='__ROOT__/Public/Ueditor/ueditor.all.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/goods.js'></script>
	
	<style type="text/css">
		/*去掉uploadify上传按钮的边框*/
	    .uploadify-button {
	        background-color: transparent;
	        border: none;
	        padding: 0;
	    }
	    .uploadify:hover .uploadify-button {
	        background-color: transparent;
    	}
    	.hide{
    		display: none;
    	}
    	body{
    		margin-bottom: 100px;
    	}
	</style> 
	<script type="text/javascript">
		var root = '__ROOT__';
		//图片上传提交地址
		var handler = '<?php echo U("uploadEditor");?>';
		var uploadify_path = '__UPLOADIFY__';
		var sess_name = "<?php echo session_name(); ?>";
		var sess_id = "<?php echo session_id(); ?>";
		//列表图上传地址
		var pic_uploader = '<?php echo U("uploadPic");?>';
		//商品图册上传地址
		var photo_uploader = '<?php echo U("uploadPhoto");?>';
		var upload_path = '__UPLOAD__';
		var delPic = '<?php echo U("delPic");?>';
		var getAttr = '<?php echo U("getAttr");?>';
	</script>
</head>
<body>
	<div class="container-fluid">
	<div class="row-fluid">
	<div class="span12">

	<form action="" method='post'>
		<fieldset>
			<legend>添加商品</legend>
			<table class='table table-bordered table-hover'>
				<thead>
					<tr>
						<th colspan="2" class="btn btn-primary">基本信息</th>
					</tr>
				</thead>
				<tbody>
					<tr class="info">
						<td>所属分类</td>
						<td>
							<select name="cid">
								<option value="0">-请选择-</option>
								<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["cid"]); ?>" tid='<?php echo ($v["tid"]); ?>'><?php if($v["pid"] > 0): ?>┖<?php endif; echo ($v["html"]); echo ($v["cname"]); ?></option><?php endforeach; endif; ?>
							</select>
						</td>
					</tr>
					<tr class="info">
						<td>所属品牌</td>
						<td>
							<select name="bid">
								<option value="0">-请选择-</option>
								<?php if(is_array($brand)): foreach($brand as $key=>$v): ?><option value="<?php echo ($v["bid"]); ?>"><?php echo ($v["bname"]); ?></option><?php endforeach; endif; ?>
							</select>
						</td>
					</tr>
					<tr class="info">
						<td>商品名称</td>
						<td>
							<input type="text" name='gname'/>
						</td>
					</tr>
					<tr class="info">
						<td>单位</td>
						<td>
							<input type="text" name='unit' value='件'/>
						</td>
					</tr>
					<tr class="info">
						<td>市价场</td>
						<td>
							<input type="text" name='marketprice'/>
						</td>
					</tr>
					<tr class="info">
						<td>商城价</td>
						<td>
							<input type="text" name='shopprice'/>
						</td>
					</tr>
					<tr class="info">
						<td>点击次数</td>
						<td>
							<input type="text" name='click'/>
						</td>
					</tr>
				</tbody>
			</table>

			<p class="btn btn-primary">商品属性</p>
			<table class="table table-bordered table-hover" id='attr' class="info">
				
			</table>
			<p class="btn btn-primary">商品规格</p>
			<table class="table table-bordered table-hover" id='spec'>
				
			</table>

			<table class='table table-bordered'>
				<tr>
					<th colspan="3" class="btn btn-primary">列表图</th>
				</tr>
				<tr class="info">
					<td>上传图片</td>
					<td>
						<input type="file" name='pic' id='pic'/>
					</td>
					<td id='pic-list'></td>
				</tr>
			</table>

			<table class='table table-bordered'>
				<tr>
					<th colspan="3" class="btn btn-primary">商品图册</th>
				</tr>
				<tr class="info">
					<td>上传图片</td>
					<td>
						<input type="file" name='photo' id='photo' />
					</td>
					<td id='photo-list'></td>
				</tr>
			</table>

			<table class='table'>
				<tr class="next_show">
					<th class="btn btn-primary">商品详细</th>
				</tr>
				<tr class="hide info">
					<td>
						<textarea name="intro" id="intro"></textarea>
					</td>
				</tr>
			</table>

			<table class='table'>
				<tr class="next_show">
					<th class="btn btn-primary">售后服务</th>
				</tr>
				<tr class="hide info">
					<td>
						<textarea name="service" id="service"></textarea>
					</td>
				</tr>
			</table>
			<input type="hidden" name='tid' value='0'/>
			<input type="submit" value="确认添加" class="btn btn-primary btn-block btn-large" />
		</fieldset>
	</form>

	</div>
	</div>
	</div>
</body>
</html>