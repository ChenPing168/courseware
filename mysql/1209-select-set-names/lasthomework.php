<?php
// 创建stu表,包含字段id,学生姓名,性别,年龄
create table stu(id tinyint unsigned,sname char(20),sex enum('男','女'),age tinyint unsigned);

// 创建diary表,包含标题,内容,查看次数
create table diary(title char(120),contents text,time smallint unsigned);


