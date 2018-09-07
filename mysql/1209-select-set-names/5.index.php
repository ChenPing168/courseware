<?php 
//设置字符集为utf8
//客户端是什么编码就告诉mysql设置什么编码
set names utf8;

//查看字符集变量
show variables like "%character%";

//要查看的选项
character_set_client     | gbk    //客户端                                             |
character_set_connection | gbk    //连接端
character_set_results    | gbk    //结果端

//随便找一张表录入汉字数据
insert into arc set title='今天是得跳舞';
//查看结果
select * from arc;












 ?>