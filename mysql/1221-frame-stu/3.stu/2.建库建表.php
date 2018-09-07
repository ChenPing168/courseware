<?php 
//创建库***
create database student charset utf8;

//创建表***
//班级表
create table class(
	cid smallint unsigned primary key auto_increment,
	cname char(10) not null default ''
);

//学生表
create table stu(
	sid int unsigned primary key auto_increment,
	sname char(20) not null default '',
	cid smallint unsigned not null default 0
);






 ?>