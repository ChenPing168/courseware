<?php 
class IndexController{
	public function index(){
		$data = include "./data.php";
		include "./tpl/index.html";
	}
	
}


 ?>