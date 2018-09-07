<?php 
//删除班级自动触发删除学生
create trigger del_class_stu after delete on class
for each row
begin
	delete from stu where cid=old.cid;
end
$

//触发器作业
创建文章表含标题、作者、发布时间字段
如果只添加了标题,发布时间字段自动设置为当前时间,
作者字段设置为后盾网
\d $
create trigger ib_hduser before insert on hd_user 3. for each row
begin
if new.uname is null then
set new.uname='后盾';
end if;
end
$









 ?>