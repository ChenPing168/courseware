<?php 
//查看所有数据库
show databases;
//使用数据库(相当于打开文件夹)
use mysql;
//显示数据库中的所有的表
show tables;
//创建c58数据库，编码为utf8
create database c58 charset utf8;
//删除c57的数据库
drop database c57;

//创建表（先use库）
use c58;
//创建学生表，包含sid列名，类型为数值中的tinyint
create table stu(sid tinyint);
//录入数据库
insert into stu set sid=1;
insert into stu set sid=2;
//查询表的数据
select * from stu;
+------+
| sid  |
+------+
|    1 |
|    2 |
+------+

//删除表
drop table stu;
//创建学生表(decimal(5,2)总共5位数字，2位小数)
create table stu(sid tinyint,money decimal(5,2));
//插入数据
insert into stu set sid=1,money=2000;
insert into stu set sid=1,money=10;
insert into stu set sid=1,money=100.235;


//tinyint(1),并不代表能存1位数字
drop table stu;
create table stu(sid tinyint(1),money decimal(5,2));
insert into stu set sid=100;
select * from stu;
+------+-------+
| sid  | money |
+------+-------+
|  100 |  NULL |
+------+-------+

//字符串类型 char(5),只能存5个字符
drop table stu;
create table stu(sid tinyint,sname char(5));
//录入数据
insert into stu set sid=1,sname='路庆生';
insert into stu set sid=1,sname='伊克山.阿不都艾尼';


//char和varchar区别
//查询速度，char要优于varchar
//存储大小，varchar要优于char
//
//char(5) 存一个字符串，那么也是占5个，定长
//varchar(5) 存一个字符，就占一个，变长




















 ?>