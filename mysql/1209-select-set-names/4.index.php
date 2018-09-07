<?php 
//查找以“小”开头的同学
select * from stu where sname like "小%";
//查找包含“小”的同学
select * from stu where sname like "%小%";
//查找以“小”结尾的同学
select * from stu where sname like "%小";

//以小开头后面跟一个字符的同学
select * from stu where sname like '小_';
//把sname从左边截取一位字符
select left(sname,1) from stu;
//从第二个位置截取一个字符串
select mid(sname,2,1) from stu;
//把sname从右边截取一位字符
select right(sname,1) from stu;

//随机得到一条数据
select * from baidu order by rand() limit 1;





 ?>