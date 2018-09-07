<?php 
//创建
create function hello(s char(20) charset utf8)
returns char(50)
reads sql data
begin
	return concat('hello ',s,' !');
end
$

//调用
select hello('hdw')$
+--------------+
| hello('hdw') |
+--------------+
| hello hdw !  |
+--------------+

//删除
drop function hello$

//创建存储函数
create function getcid(n char(20) charset utf8)
returns int
reads sql data
begin
	return (select cid from stu where sname=n);
end
$
//存储函数可以用在sql语句中
select cname from class where cid=getcid('小猫')$





















 ?>