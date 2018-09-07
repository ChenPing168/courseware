<?php
//安装框架

//一、班级添加*********************
1.布局班级显示的模板
2.布局添加班级的模板
3.通过点击“添加班级”跳转到add方法
4.公共的头部摘取出来放到Common目录
5.在App::init方法里面给框架增加了IS_POST常量
6.配置App/Common/Config.php里面的数据库
7.在IndexController::add方法执行添加
8.在Hdphp/Lib/Controller.php里面补充success方法

//二、班级显示*********************
1.在IndexController::index方法，查询数据库，分配数据
2.在index.php页面循环就可以了

//三、删除班级**********************
1.建立del方法
2.增加删除的a连接，指向del方法，别忘记传递cid
3.在del方法执行删除操作即可

//四、编辑班级**********************
1.建立edit方法
2.增加编辑的a连接，指向edit方法，别忘记传递cid
3.获得旧数据，并且分配给模板
4.edit方法修改


//五、学生添加(作业)
1.建立StuController，建立好index,add,del,edit方法
2.在add方法中实现添加


//六、学生展示
1.StuController::index方法调取全部数据，并且分配到模板
2.在模板循环显示学生数据

//七、学生删除(作业)


//八、学生编辑(作业)


















