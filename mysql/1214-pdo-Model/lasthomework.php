<?php 
作业:(需要建立3张表，arc(文章表) arc_tag(中间表) tag(标签表))
// 例:检索出文章的标签id
select title,tid from arc as a join arc_tag as at on a.aid=at.aid;
// 例:检索出“后盾网”都对应的标签名
select title,tname from arc as a join arc_tag as at on a.aid=at.aid join tag as t on at.tid=t.tid where title='后盾网';
// 例:检索出和“后盾网”拥有一样标签的文章(不要求完全一样)（分两步做）
// (1)先检索出后盾网所对应的标签id
select tid from arc as a join arc_tag as at on a.aid=at.aid where title="后盾网";
// (2)根据查询到的标签id,找出文章
select title from arc as a join arc_tag as at on a.aid=at.aid where tid in(1,2);
// 例:检索出每篇文章所对应的标签
select * from arc as a join arc_tag as at on a.aid=at.aid join tag as t on at.tid=t.tid;
// 例:检索出每个标签所对应文章的数量
select tname,count(*) from arc_tag as at join tag as t on at.tid=t.tid group by tname;

//* 低于 aid 的效率
select * from arc;
select aid from arc;

//* 高于 aid 的效率
select count(*) from arc;
select count(aid) from arc;










 ?>