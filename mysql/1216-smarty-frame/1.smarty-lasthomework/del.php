<?php 
include_once './Model.class.php';
$model = new Model;
$aid = $_GET['aid'];
$model->exec("DELETE FROM arc WHERE aid={$aid}");
$str = <<<str
<script>
window.history.back();
</script>
str;
echo $str;

 ?>