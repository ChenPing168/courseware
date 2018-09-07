<?php 
header('Content-type:text/html;charset=utf-8');
class Model{
	private static $pdo = NULL;

	public function __construct(){
		if(is_null(self::$pdo)){
			//通过PDO连接数据库
			try{
				$dsn = "mysql:host=127.0.0.1;dbname=c58";
				self::$pdo = new Pdo($dsn,'root','');
				//设置字符集
				self::$pdo->query("SET NAMES UTF8");
				//设置错误类型(设置异常错误)
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				//输出错误
				echo $e->getMessage();
			}
		}
	}
	//执行查询
	public function query($sql){
		try{
			//返回结果集对象
			$result = self::$pdo->query($sql);
			//获得数据
			$data = $result->fetchAll(PDO::FETCH_ASSOC);
			return $data;

		}catch(PDOException $e){
			echo $e->getMessage() . '<span style="color:red">):</span>';
		}
		
	}

	//执行(insert,update,delete)
	public function exec($sql){
		try{
			//返回受影响条数
			$afRows = self::$pdo->exec($sql);
			return $afRows;

		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

}

//M函数，为了将来使用模型更加方便
function M(){
	$model = new Model;
	return $model;
}

//执行查询
$data = M()->query("SELECT * FROM arc");
print_r($data);


//执行删除
// M()->exec("DELETE FROM arc WHERE aid=18");


















 ?>