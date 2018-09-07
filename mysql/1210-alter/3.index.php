<?php 
//date类型的使用方式
create table member(
	mid int unsigned primary key auto_increment,
	name char(20) not null default '',
	birthday date
);

//录入数据
insert into member (name,birthday) values ('小红','1990-1-1'),('小绿',19901001);

//输出现在的时间
select now();
+---------------------+
| now()               |
+---------------------+
| 2015-12-10 12:05:27 |
+---------------------+

//统计会员总数
select count(*) from member;

select * from member;
+-----+--------+------------+-------+
| mid | name   | birthday   | click |
+-----+--------+------------+-------+
|   1 | 小红   | 1990-01-01 |   200 |
|   2 | 小绿   | 1990-10-01 |     0 |
+-----+--------+------------+-------+
//查找点击次数最小的数据
select min(click) from member;
//查找点击次数最大的数据
select max(click) from member;
//取得click总和
select sum(click) from member;
//取得平均数
select avg(click) from member;

//按照性别分组，筛选性别为女的组
//group by 和 having组合使用的
select * from member group by sex having sex='女';







 ?>