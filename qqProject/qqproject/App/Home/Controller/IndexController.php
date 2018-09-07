<?php namespace Home\Controller; 
use Hdphp\Controller\Controller;
use QC;

//测试控制器
class IndexController extends Controller{

	//构造函数
	public function __init()
	{
	}
	
    //动作
    public function index(){
    		//qq登陆回调之后的动作
    		if(Q('get.code') && Q('get.state')){
    			$qc = new QC;
			$acs = $qc->qq_callback();
			$oid = $qc->get_openid();
			$qc = new QC($acs,$oid);
			$userinfo = $qc->get_user_info();
			//如果是新用户
			$userData = Db::table('user')->where("username='{$oid}'")->get();
			if(!$userData){
				$data = array(
					'username' => $oid,
					'nickname' => $userinfo['nickname']			
				);
				$uid = Db::table('user')->insert($data);
			}else{//老用户
				$uid = $userData[0]['uid'];
			}
			$_SESSION['uid'] = $uid;
			$_SESSION['nickname'] = $userinfo['nickname'];
			View::success('登陆成功',U('index'));
			
    		}
    		View::make();
    }
	
	public function login(){
		$qc = new QC();
		$qc->qq_login();
	}
	
	
	
	
	
	
	
	
	
	
	
}
