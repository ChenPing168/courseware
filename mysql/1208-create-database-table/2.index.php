<?php 
//前导零 zerofill 也会把类型变为正数范围
//tinyint(10) 如果存1位数字，那么会补充9个零
create table stu(sid tinyint(10) zerofill);
insert into stu set sid=1;
select * from stu;
+------------+
| sid        |
+------------+
| 0000000001 |
| 0000000002 |
| 0000000200 |
+------------+

//非负 unsigned,把类型变为正数范围
create table stu(sid tinyint unsigned);











 ?>