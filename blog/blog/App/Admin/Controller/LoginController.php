<?php namespace Admin\Controller; 
use Hdphp\Controller\Controller;
/**
 * 登陆控制器
 */
class LoginController extends Controller{
    //登陆页面
    public function index(){
    		if(IS_POST){
    			//一、接收数据
    			//接收用户名
    			$username = Q('post.username');
			//接收密码
			//(1.要接收的参数，(2是默认值，(3作用函数
			$password = Q('post.password','','md5');
			//二、判断用户名是否存在
			//select * from user where username='{$username}' limit 1;
			$model = new \Common\Model\User;
			//从数据库获得用户数据
			$data = $model->where("username='{$username}'")->find();
			if(!$data) View::error('用户名或者密码错误');
			//三、判断密码是否正确
			if($data['password'] != $password) View::error('用户名或者密码错误');
			//四、登陆成功
			$_SESSION['uid'] = $data['uid'];
			$_SESSION['username'] = $data['username'];
			View::success('登陆成功',U('Index/index'));
			
    		}
    		//载入模板
    		View::make();
    }
	
	//退出登陆
	public function out(){
	 	session_unset();
		session_destroy();
		//跳转到登陆首页
		go(U('Login/index'));
	}
	
}













