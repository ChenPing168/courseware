<?php 
//enum 枚举(类似于单选)
create table stu(sid tinyint unsigned,sname char(20),sex enum('男','女'));
//录入数据
insert into stu set sid=1,sname='小明',sex='女';


//set (类似于多选)
create table stu(
	sid tinyint unsigned,
	sname char(20),
	sex enum('男','女'),
	hobby set('篮球','排球','乒乓球','PHP')
);
insert into stu set sid=1,sname='伊克山',sex=1,hobby='篮球,排球,PHP';













 ?>