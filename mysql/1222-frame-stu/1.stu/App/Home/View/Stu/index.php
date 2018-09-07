<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	{{include file="../Common/header.php"}}
	<div class="box">
		<div class="alert alert-danger" role="alert">学生管理</div>
		<table class="table table-hover">
	  		<tr>
	  			<th width="80">学生ID</th>
	  			<th>姓名</th>
	  			<th>班级</th>
	  			<th width="230">操作</th>
	  		</tr>
	  		{{foreach from=$data item=v}}
	  		<tr>
	  			<td>{{$v.sid}}</td>
	  			<td>{{$v.sname}}</td>
	  			<td>{{$v.cname}}</td>
	  			<td>
	  				<a href="?c=Stu&a=edit&sid={{$v.sid}}" class="btn btn-primary btn-sm">编辑</a>
	  				<a href="javascript:if(confirm('确定删除吗？')) location.href='index.php?c=Stu&a=del&sid={{$v.sid}}';" class="btn btn-danger btn-sm">删除</a>
	  			</td>
	  		</tr>
	  		{{/foreach}}
		</table>
		<a href="index.php" class="btn btn-primary btn-sm">返回到首页</a>
	</div>
	
	
	
	
	
	
	
	
</body>
</html>