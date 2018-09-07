<?php namespace Admin\Controller; 
use Hdphp\Controller\Controller;

//登陆控制器
class LoginController extends Controller{
	
    //动作
    public function index(){
    	if(IS_POST){
	    	//获得提交信息
	    	$username = Q('post.username');
	    	$password = Q('post.password','','md5');
	    	//数据库查询比对
	    	$userData = Db::table('rbac_adminuser')->where('username="' . $username . '"')->get();
	    	if(!$userData) View::error('用户名或者密码错误');
	    	if($userData[0]['password'] != $password) View::error('用户名或者密码错误');

	    	$_SESSION['uid'] = $userData[0]['uid'];
	    	$_SESSION['username'] = $userData[0]['username'];
	    	//成功提示
	    	View::success('登陆成功',U('Index/index'));
   		}
        View::make();
    }


    public function out(){
    	session_unset();
    	session_destroy();
    	View::success('退出成功',U('index'));
    }

}










