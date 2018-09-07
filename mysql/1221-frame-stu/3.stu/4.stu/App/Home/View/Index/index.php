<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	{{include file="../Common/header.php"}}
	<div class="box">
		<div class="alert alert-success" role="alert">班级管理</div>
		<table class="table table-hover">
	  		<tr>
	  			<th width="80">班级ID</th>
	  			<th>名称</th>
	  			<th width="230">操作</th>
	  		</tr>
	  		{{foreach from=$data item=v}}
	  		<tr>
	  			<td>{{$v.cid}}</td>
	  			<td>{{$v.cname}}</td>
	  			<td>
	  				<a href="?c=Stu&a=add&cid={{$v.cid}}" class="btn btn-info btn-sm">添加学生</a>
	  				<a href="?a=edit&cid={{$v.cid}}" class="btn btn-primary btn-sm">编辑</a>
	  				<a href="javascript:if(confirm('确定删除吗？')) location.href='?a=del&cid={{$v.cid}}';" class="btn btn-danger btn-sm">删除</a>
	  			</td>
	  		</tr>
	  		{{/foreach}}
		</table>
		<a href="?a=add" class="btn btn-success btn-block">添加班级</a>
		<a href="?c=Stu" class="btn btn-primary btn-block">显示全部学生</a>
	</div>
	
	
	
	
	
	
	
	
</body>
</html>