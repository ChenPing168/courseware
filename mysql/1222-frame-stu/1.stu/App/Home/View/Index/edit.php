<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	{{include file="../Common/header.php"}}
<div class="box">
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">班级名称</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入班级" name="cname" required="" value="{{$oldData.cname}}">
  </div>
  <button type="submit" class="btn btn-success">编辑</button>
  <a href="index.php" class="btn btn-info">返回</a>
</form>
</div>	
	
	
	
	
	
	
	
</body>
</html>