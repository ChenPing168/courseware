<?php 
//设置cookie
//setcookie('webname','houdunwang');

//作用路径并不是cookie的保存路径
//设置一小时之后过期,如果时间设置为0，那么会话期间
//如果路径没有设置，默认是当前目录
//setcookie('w','houdun',time() + 3600);

//把作用路径设置为 / , 在www目录下面的所有的文件都可以用这个cookie了
//一般我们会把作用路径设置 /
//setcookie('h','www.houdun.com',0,'/');

//因为cookie不能直接存数组或者对象
$cart = array('ip6s plus','ipad', 'mac pro');
//需要先序列化成字符串，然后再存进去
$str = serialize($cart);
setcookie('cart',$str,0,'/');








 ?>