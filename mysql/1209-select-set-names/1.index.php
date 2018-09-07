<?php 
//查看表结构
desc stu;
//default 字段修饰，默认值
//not null 和 default 和结合起来使用的
create table user(
	uid smallint unsigned not null default 0,
	name char(20) not null default ''
);

//unique 非重
create table user(
	uid int unsigned,
	username char(20) not null default '' unique,
	password char(32) not null default ''
)


//主键 primary key
//自增 auto_increment
create table arc(
	aid int unsigned primary key auto_increment,
	title char(120) not null default '',
	content text,
	click smallint unsigned not null default 0
);

//删除aid为2的数据
delete from arc where aid=2;


//复制user表的表结构为user_bak
//不复制内容
create table user_bak like user;

//把user表的数据复制到user_bak
insert into user_bak select * from user;

//创建表同时复制数据
create table user_bak1 select * from user;











 ?>