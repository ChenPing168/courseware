<?php 
//会员管理控制器
class MemberController{
	private $db;
	public function __construct(){
		$this->db = include "./data.php";
	}
	//注册
	public function reg(){
		if(!empty($_POST)){
			//1.先判断用户名是否已存在
			
			//2.添加数据
			$this->db[] = array(
				'username' => $_POST['username'],
				'password' => md5($_POST['password'])
			);
			$phpCode = "<?php return " . var_export($this->db,true) . "?>";
			file_put_contents('./data.php', $phpCode);
			success('注册成功', './index.php');
		}
		include './tpl/reg.html';
	}
	//登陆
	public function login(){
		if(!empty($_POST)){
			foreach ($this->db as $user) {
				//用户名和密码都符合
				if($user['username'] == $_POST['username'] && $user['password'] == md5($_POST['password'])){
					//把什么存入session?
					
					success('登陆成功', './index.php');
				}
			}
			success('用户名或者密码错误', 'index.php?c=Member&a=login');
		}
		include './tpl/login.html';
	}
	//退出
	public function out(){
		unset($_SESSION['name']);
		success('退出成功', './index.php');
	}
}

 ?>