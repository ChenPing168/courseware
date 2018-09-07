<?php 
//删除非重索引
alter table ccshop_user drop index account_key;
//增加非重索引
alter table ccshop_user add unique account_key(account);
//查看非重索引是否加上
show create table ccshop_user;


//删除主键
//1.删除自增
alter table ccshop_user modify uid int unsigned not null;
//2.删除主键
 alter table ccshop_user drop primary key;


//增加主键
//1.增加主键
alter table ccshop_user add primary key (uid);
//2.增加自增
alter table ccshop_user modify uid int unsigned not null auto_increment;


*************************** 1. row ***************************
           id: 1
  select_type: SIMPLE
        table: ccshop_user
         type: const----------------- 用到的索引类型
possible_keys: PRIMARY
          key: PRIMARY
      key_len: 4
          ref: const
         rows: 1--------------------- 扫描的行数
        Extra: NULL
1 row in set (0.00 sec)



//维度 = 不重复出现的总个数/总个数
//要为维度高的列创建索引
//性别不适合加索引,因为维度过低
select count(distinct(sex))/count(*) from ccshop_user;



//前缀索引
//1.计算
select count(distinct(left(gname,5)))/count(*) from ccshop_goods;
//2.增加前缀索引
alter table ccshop_goods add index gname_key(gname(5));
//3.查询是否走索引
explain select * from ccshop_goods where gname='2013新款致青春白色短袖T恤333'\G



//组合索引
alter table ccshop_goods add index click_price_key(click,shopprice);

//遵循左前原则，就是带有click的时候才会走索引
//走索引
explain select * from ccshop_goods where click>2000 and shopprice=56\G
//走索引
explain select * from ccshop_goods where click=583\G 
//不走索引
 explain select * from ccshop_goods where shopprice=118\G     


[myqld]
slow_query_log = on
slow_query_log_file = d:/slow.log
long_query_time = 2


重启wamp

然后再mysql里面打
show variables like "%slow%"



//整理碎片
optimize table ccshop_goods;















 ?>