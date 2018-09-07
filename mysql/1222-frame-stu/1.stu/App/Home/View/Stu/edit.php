<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	{{include file="../Common/header.php"}}
<div class="box">
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">学生名称</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入姓名" name="sname" required="" value="{{$oldData.sname}}">
  </div>
  <input type="hidden" name="sid" value="{{$smarty.get.sid}}"/>
  <button type="submit" class="btn btn-success">编辑</button>
  <a href="index.php?c=Stu" class="btn btn-info">返回</a>
</form>
</div>	
	
	
	
	
	
	
	
</body>
</html>