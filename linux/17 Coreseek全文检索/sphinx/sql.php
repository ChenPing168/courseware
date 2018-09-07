<?php
#数据表 如果使用xshell设置xshell字符集为utf8
set names utf8;
drop database if exists houdunwang;
#创建库
create database houdunwang charset utf8;
use houdunwang;
drop table if exists news;
#创建表
create table news(id int primary key auto_increment,title char(100),content text,addtime int,uid int)charset utf8;
#录入数据
insert into news(title,content,uid)values('后盾网','北京后盾网',1);
insert into news(title,content,uid)values('我在后盾网学习','我在后盾网学习到了PHP技能',1);

#增量控制表
drop table if exists counter;
create table counter(id tinyint default 1 primary key ,max_id int)charset utf8;
