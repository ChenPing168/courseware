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
			$this->db[] = $_POST;
			//代码合法化
			$phpCode = "<?php return " . var_export($this->db,true) . "?>";
			//写入数据库
			file_put_contents('./data.php', $phpCode);
			//成功提示
			success('添加成功', 'index.php');
		}
		include "./tpl/add.html";
	}
	//删除
	public function del(){
		p($_GET);
	}
	//编辑
	public function edit(){
	   include "./tpl/edit.html"; 
	}
	//点击标题阅读文章
	public function show(){
	   include "./tpl/show.html"; 
	}
	
	
	
	
	
	
}

 ?>