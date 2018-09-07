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
			$username = $_POST['username'];
			//1.先判断用户名是否已存在
			foreach ($this->db as $user) {
				if($user['username'] == $username){
					success('用户名' . $username . '已存在', './index.php?c=Member&a=reg');
				}
			}
			//2.添加数据
			$this->db[] = array(
				'username' => $username,
				'password' => md5($_POST['password'])
			);
			//代码合法化
			$phpCode = "<?php return " . var_export($this->db,true) . "?>";
			//写入数据库
			file_put_contents('./data.php', $phpCode);
			success('注册成功', './index.php');
		}
		include './tpl/reg.html';
	}
	//登陆
	public function login(){
		if(!empty($_POST)){
			//1.验证码是否正确
			if(strtolower($_POST['code']) != $_SESSION['code']){
				success('验证码错误', './index.php?c=Member&a=login');
			}
			//2.判断用户名和密码是否正确
			foreach ($this->db as $user) {
				//用户名和密码都符合
				if($user['username'] == $_POST['username'] && $user['password'] == md5($_POST['password'])){
					//把什么存入session?
					$_SESSION['name'] = $_POST['username'];
					//7天免登陆
					if(isset($_POST['auto'])){
						setcookie(session_name(),session_id(),time() + 3600 * 24 * 7, '/');
					}else{
						setcookie(session_name(),session_id(),0, '/');
					}
					success('登陆成功', './index.php');
				}
			}
			//扩展：密码输错3次，显示验证码
//			if(!isset($_SESSION['error'])){
//				$_SESSION['error'] = 1;
//			}else{
//				$error = $_SESSION['error'];
//				$error++;
//				$_SESSION['error'] = $error;
//			}
			success('用户名或者密码错误', 'index.php?c=Member&a=login');
		}
		include './tpl/login.html';
	}
	//退出
	public function out(){
		session_unset();
		session_destroy();
		success('退出成功', './index.php');
	}
	//显示验证码
	public function code(){
		$code = new Code(160,30,1);
		$code->show();
	}
}




