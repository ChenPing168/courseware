<?php 
class ArcController{
	private $db;
	public function __construct(){
		$this->db = include "./data.php";
	}
	//添加（异步请求）
	public function add(){
		$this->db[] = $_POST;
		$phpCode = "<?php return " . var_export($this->db,true) . "?>";
		file_put_contents('./data.php', $phpCode);
		//$_POST就是此数组array('nickname'=>'小红','content'=>'今天得买票了')
		echo json_encode($_POST);
	}
}

 ?>