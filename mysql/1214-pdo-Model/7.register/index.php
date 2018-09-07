<?php 
include "../../../php/functions.php";
function __autoload($cName){
	require "./{$cName}.class.php";
}
function M(){
	$model = new Model;
	return $model;
}

$a = isset($_GET['a']) ? $_GET['a'] : 'index';

$obj = new IndexController;
$obj->$a();


 ?>