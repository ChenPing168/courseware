<?php 
//查询uid 为null的数据
select * from user where uid is null;

//if使用
 select click,if(click>5000,'多','少') as i from arc;
+-------+-----+
| click | i   |
+-------+-----+
| 10000 | 多  |
|  1000 | 少  |
|  1000 | 少  |
+-------+-----+ 


//order 排序 
//desc 降序 asc 升序
//创建百度表
create table baidu(
	bid int unsigned primary key auto_increment,
	name char(100) not null default '',
	sort smallint unsigned not null default 0
);

insert into baidu set name='腾讯搜索',sort=98;
insert into baidu set name='360搜索',sort=100;
insert into baidu set name='google搜索',sort=99;

//修改bid为1的数据中的sort变为101
update baidu set sort=101 where bid=1;

//排序，升序
select * from baidu order by sort asc;
+-----+--------------+------+
| bid | name         | sort |
+-----+--------------+------+
|   2 | 360搜索      |  100 |
|   1 | 腾讯搜索     |  101 |
|   3 | google搜索   |  200 |
+-----+--------------+------+


//limit 截取
//limit 1 从开始截取1条
select * from baidu limit 1;
//limit 1,2 从1开始截取2条
select * from baidu limit 1,2;

//between 101 and 200 
//查找101到200之间的值，包括101和200
select * from baidu where sort between 101 and 200;
+-----+--------------+------+
| bid | name         | sort |
+-----+--------------+------+
|   1 | 腾讯搜索     |  101 |
|   3 | google搜索   |  200 |
|   4 |              |  150 |
+-----+--------------+------+


//查询100或者150的数据
select * from baidu where sort in(100,150);
+-----+-----------+------+
| bid | name      | sort |
+-----+-----------+------+
|   2 | 360搜索   |  100 |
|   4 |           |  150 |
+-----+-----------+------+







 ?>