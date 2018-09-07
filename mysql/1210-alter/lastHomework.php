<?php 
// 查找所有姓李的同学
select * from stu where name like '李%';
// 随机显示2篇文章
select * from arc order by rand() limit 2;
// 查找文章中包含PHP的文章
select * from arc where contents like '%PHP%';

 ?>