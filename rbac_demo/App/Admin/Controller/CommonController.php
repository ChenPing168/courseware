<?php namespace Admin\Controller; 

use Hdphp\Controller\Controller;

//公共控制器
class CommonController extends Controller{

	public function __init(){
		//检测是否登陆
		if(!Rbac::isLogin()) go(U('Login/index'));
		//判断是否有权限
		if(!Rbac::verify()) View::error('抱歉，没有权限哦！亲，再乱点揍你',U('Index/index'));
	}
	
	
    
}










