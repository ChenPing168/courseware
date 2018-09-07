<?php 
//更变边界符
\d $

//创建存储过程
create procedure get_bid(inout n char(20) charset utf8)
begin
	select bid from bank where name=n;
end
$
//调用
set @name='马震宇'$
call get_bid(@name)$

//存储过程作业
//1. 创建删除班级的存储过程
//2. 实现删除班级时一并删除此班级中的学生
//3. 调用方式call del_class(1);
//创建表
create table class(
	cid int unsigned primary key auto_increment,
	cname char(20) not null default ''
);
create table stu(
	sid int unsigned primary key auto_increment,
	sname char(20) not null default '',
	cid int unsigned not null default 0
);
\d $
create procedure del_class(inout id smallint)
begin
	delete from class where cid=id;
	delete from stu where cid=id;
end
$
set @id=1$
call del_class(@id)$





 ?>