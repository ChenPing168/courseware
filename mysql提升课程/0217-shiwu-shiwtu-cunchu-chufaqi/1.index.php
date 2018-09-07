<?php 
//修改表的引擎
alter table a engine=myisam;

//开启事务
begin;
//关闭自动提交
set autocommit=0;
//扣100
update bank set money=money-100 where bid=1;
//回滚，begin开始的所有sql语句操作
rollback;


//开启事务
begin;
//关闭自动提交
set autocommit=0;
//扣100
update bank set money=money-100 where bid=1;
//加100
update bank set money=money+100 where bid=2;
//提交
commit;














 ?>