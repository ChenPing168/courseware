<?php 
//把stu表改名为student
alter table stu rename student;

//change 改名同时改类型
//把sname改成name,然后类型改为char(15)
alter table student change sname name char(15) not null default ''; 

//modify 改类型
alter table student modify name char(30) not null default '' first;
//修改name为char(30)并且放在sid的后面
alter table student modify name char(30) not null default '' after sid;


//追加字段
//给student表追加sex字段，并且在name的后面
alter table student add sex enum('男','女') not null default '男' after name;

//删除字段
//删除hobby字段
alter table student drop hobby;


//(1)增加stu表的主键
alter table stu add primary key(sid);
//(2)增加自增
alter table stu modify sid int unsigned auto_increment;


//(1)先删自增
alter table stu modify sid int unsigned;
//(2)删除主键
alter table stu drop primary key;














 ?>