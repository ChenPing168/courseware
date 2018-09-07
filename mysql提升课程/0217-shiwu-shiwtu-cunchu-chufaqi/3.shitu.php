<?php 
//1.创建视图
create view bankview as select bid,bname from bank;
//2.查看视图
show table status where comment='VIEW';
//3.修改视图
alter view bankview as select bid from bank;
//4.删除视图
drop view bankview;


 ?>