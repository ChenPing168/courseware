<?php 
// desc user;
// +----------+------------------+------+-----+---------+----------------+
// | Field    | Type             | Null | Key | Default | Extra          |
// +----------+------------------+------+-----+---------+----------------+
// | uid      | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
// | username | char(20)         | NO   |     |         |                |
// | password | char(32)         | NO   |     |         |                |
// +----------+------------------+------+-----+---------+----------------+

class IndexController{
	//注册首页
	public function index(){
		if(!empty($_POST)){
			//获得post提交过来的用户名和密码
			
			//组合sql
		
			//用Model执行
			
			//成功提示
			
		}
		include "./tpl/reg.html";
	}
}










 ?>