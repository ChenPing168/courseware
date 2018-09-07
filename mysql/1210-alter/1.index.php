<?php 
//一次录入多条数据
insert into stu (sname,hobby) values ('小绿','PHP'),('小黄','JS');
//清空表的所有数据，谨慎操作！
truncate stu;
//sid为1的记录，如果没有就添加，如果有就替换
replace into stu (sid,sname,hobby) values (1,'小粉','PHP');
//修改(where条件可以不加，可以修改全部数据，谨慎操作！)
update stu set sname='小白' where sid=1;

//删除(where条件可以不加，可以删除全部数据，谨慎操作！)
delete from stu where sid=4;









 ?>