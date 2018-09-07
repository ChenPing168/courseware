<?php 
//1.in(输出外面传入的值，不能改变外面传入的值)
create procedure a(in id int)
begin
	select id;
	set id=100;
end
$

//2.out(不可以输出外面传入的值，能改变外面传入的值)
create procedure b(out id int)
begin
	select id;
	set id=100;
end
$
//3.inout（综合上述两种情况）


create procedure insert_data(in num int)
begin
	while num > 0 do
	insert into class set cname=num;
	set num = num - 1;
	end while;
end
$

//查看状态
show procedure status;
//删除get_bid这个存储过程
drop procedure get_bid;








?>