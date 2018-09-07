<?php
// 向学生表stu中录制2条记录
insert into stu (sname) values ('小红'),('小白');
// 将年纪小于20的同学,把年纪加1
update stu set age=age+1 where age<20;
// 删除年纪最小的同学
delete from stu order by age asc limit 1;
// 修改学生表name字段长度为char(20)
alter table stu modify name char(20) not null default '';
// 修改学生姓名字段为username char(30)
alter table stu change name username char(30) not null default '';
// 创建学生表包含名字,性别,生日字段
create table stu(sid int unsigned primary key auto_increment,name char(20) not null default '',sex enum('男','女') not null default '男',birthday date);
// 查找所有90后的女同学
select * from stu where year(birthday)>=1990 and year(birthday)<=1999 and sex='女';
// 查找班级年龄最小同学(按照生日字段排序)
select * from stu order by birthday desc limit 1;
// 查询会员的总数
select count(*) from member;
// 查找名字包含“小”的同学的总数
select count(*) from stu where sname like "%小%";











 ?>