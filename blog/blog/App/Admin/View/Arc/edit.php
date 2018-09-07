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
	    <!--载入百度编辑器-->
	    	<script type="text/javascript" charset="utf-8" src="Public/ueditor1_4_3/ueditor.config.js"></script>
    		<script type="text/javascript" charset="utf-8" src="Public/ueditor1_4_3/ueditor.all.min.js"> </script>
    		<script type="text/javascript" charset="utf-8" src="Public/ueditor1_4_3/lang/zh-cn/zh-cn.js"></script>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
		<div class="alert alert-success">编辑文章</div>
		<div class="form-group">
			<label for="exampleInputEmail1">文章标题</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入文章标题"  name="title" value="{{$oldData['title']}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">作者</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入作者"  name="author" value="{{$oldData['author']}}">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">所属分类</label>
			<select name="category_cid" class="form-control">
				<option value="">请选择</option>
				{{foreach from="$cateData" value="$v"}}
					<option value="{{$v['cid']}}" <?php if($oldData['category_cid'] == $v['cid']): ?> selected <?php endif ?> >{{$v['_name']}}</option>
				{{endforeach}}
			</select>
		</div>
		<script src="Public/jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function(){
				//点击关闭图片按钮
				$('.close_img').click(function(){
					//删除图片元素
					var str = '<label for="exampleInputEmail1">缩略图</label><input id="exampleInputEmail1" type="file" name="thumb">';
					$('#upload_box').html(str);
				})
			})
		</script>
		<div class="form-group" id="upload_box">
			<!--如果有缩略图的时候-->
			{{if value="$oldData['thumb']"}}
				<img src="{{$oldData['thumb']}}" width="200"/>
				<a href="javascript:;" class="close_img">X</a>
				<input type="hidden" name="thumb" value="{{$oldData['thumb']}}"/>
			{{else}}
				<label for="exampleInputEmail1">缩略图</label><input id="exampleInputEmail1" type="file" name="thumb">
			{{endif}}
		</div>
		<div id="">
			<label for="">文章标签</label>
			<br />
			{{foreach from="$tagData" key="$k" value="$v"}}
			<label class="checkbox checkbox-inline" for="checkbox{{$k}}">
				<input id="checkbox{{$k}}" class="custom-checkbox" type="checkbox" data-toggle="checkbox" value="{{$v['tid']}}" name="tid[]"  {{if value="in_array($v['tid'],$tids)"}}checked{{endif}} >
				<span class="icons">
				<span class="icon-unchecked"></span>
				<span class="icon-checked"></span>
				</span>
				{{$v['tname']}}
			</label>
			{{endforeach}}
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">文章摘要</label>
			<textarea name="digest" rows="5" cols=""  class="form-control" placeholder="请输入文章关键字">{{$oldData['digest']}}</textarea>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">文章关键字</label>
			<textarea name="keywords" rows="5" cols=""  class="form-control" placeholder="请输入文章关键字">{{$oldData['keywords']}}</textarea>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">文章描述</label>
			<textarea name="des" rows="5" cols=""  class="form-control" placeholder="请输入文章描述">{{$oldData['des']}}</textarea>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">文章正文</label>
			<!--调用百度编辑器-->
			<script id="editor" type="text/plain" style="width:100%;height:500px;" name="content">{{$oldData['content']}}</script>
		    <script>
		        var ue = UE.getEditor('editor');
		    </script>
		</div>
		<input type="hidden" name="aid" value="{{$_GET['aid']}}"/>
		<button class="btn btn-primary btn-block" type="submit"> 确定 </button>
		</form>
	</body>
</html>
