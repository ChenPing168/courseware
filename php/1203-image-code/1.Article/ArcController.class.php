<?php 
class ArcController{
	//保存数据库的属性
	private $db;
	//$data 就是数据库
	public function __construct($data){
		//赋值给属性
		$this->db = $data;
	}
	//首页
	public function index(){
		$data = $this->db;
		include "./tpl/index.html";
	}
	//添加
	public function add(){
		//如果用户有提交
		if(!empty($_POST)){
			//追加到数据库数组
			$_POST['time'] = date('Y-m-d H:i:s');
			$this->db[] = $_POST;
			//代码合法化，写入数据库
			$this->dataToFile();
			//成功提示
			success('添加成功', 'index.php');
		}
		include "./tpl/add.html";
	}
	//删除
	public function del(){
		$id = (int)$_GET['id'];
		unset($this->db[$id]);
		//代码合法化，写入数据库
		$this->dataToFile();
		success('删除成功', 'index.php');
	}
	//编辑
	public function edit(){
		//1.获得旧数据
		$id = (int)$_GET['id'];
		$oldData = $this->db[$id];
		//2.修改
		if(!empty($_POST)){
			$_POST['time'] = $oldData['time'];
			$this->db[$id] = $_POST;
			//代码合法化，写入数据库
			$this->dataToFile();
			success('修改成功', 'index.php');
		}
		include "./tpl/edit.html"; 
	}
	//点击标题阅读文章
	public function show(){
		$id = (int)$_GET['id'];
		$data = $this->db[$id];
	   include "./tpl/show.html"; 
	}
	/**
	 * 把数据写入文件
	 */
	private function dataToFile(){
		//代码合法化
		$phpCode = "<?php return " . var_export($this->db,true) . "?>";
		//写入数据库
		file_put_contents('./data.php', $phpCode);
	}
	
	
	
	
}

 ?>