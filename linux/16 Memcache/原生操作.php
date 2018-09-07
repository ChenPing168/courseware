<?php
$m = new Memcache;
$m->connect('127.0.0.1',11211);
$hdw = $m->get('hdw');
if(!$hdw){
echo 'run mysql';
 $pdo = new Pdo('mysql:host=127.0.0.1;dbname=houdunwang','root','');
 $pdo->query("set names utf8");
 $result = $pdo->query("select * from user");
 $rows = $result->fetchAll();
 $m->set('hdw',$rows,0,20);
 $hdw = $m->get('hdw');
}

echo '<pre>';
print_r($hdw);
