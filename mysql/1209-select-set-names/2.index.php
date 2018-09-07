<?php 
//查询所有
select * from arc;
//查询aid
select aid from arc;
//查询aid,title
select aid,title from arc;
//别名 as 
select aid,title as t from arc;
//where 代表条件
select * from arc where aid>1 and click>100;

//concat连接字符串
select concat(title,'-',click) as c from arc;
+--------------------------------------------------+
| c                                                |
+--------------------------------------------------+
| 今天有雾霾，北京还能不能待了-10000               |
| 今天有雾霾-1000                                  |
| 今天有雾霾-1000                                  |
+--------------------------------------------------+

//查询结构与自身比较
select click,click>5000 as c from arc;
+-------+---+
| click | c |
+-------+---+
| 10000 | 1 |
|  1000 | 0 |
|  1000 | 0 |
+-------+---+

//把click重复的值去掉
select distinct(click) from arc;


//查找set类型
create table stu(
	sid int unsigned primary key auto_increment,
	sname char(20) not null default '',
	hobby set('篮球','足球','PHP','JS')
);

select * from stu;
+-----+--------+------------+
| sid | sname  | hobby      |
+-----+--------+------------+
|   1 | 小明   | 篮球,PHP   |
|   2 | 小王   | PHP        |
|   3 | 小红   | PHP,JS     |
+-----+--------+------------+

//查找喜欢篮球的同学
//1.find_in_set() 不推荐
select * from stu where find_in_set('篮球',hobby);
+-----+--------+------------+
| sid | sname  | hobby      |
+-----+--------+------------+
|   1 | 小明   | 篮球,PHP   |
|   4 | 瑶瑶   | 篮球       |
+-----+--------+------------+

//2. &1 不推荐
select * from stu where hobby &1;
+-----+--------+------------+
| sid | sname  | hobby      |
+-----+--------+------------+
|   1 | 小明   | 篮球,PHP   |
|   4 | 瑶瑶   | 篮球       |
+-----+--------+------------+

//3. like 模糊匹配 推荐
select * from stu where hobby like '%篮球%';
+-----+--------+------------+
| sid | sname  | hobby      |
+-----+--------+------------+
|   1 | 小明   | 篮球,PHP   |
|   4 | 瑶瑶   | 篮球       |
+-----+--------+------------+










 ?>