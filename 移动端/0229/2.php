<?php 
$i = 0;
foreach($_POST['img'] as $f)
{
	$i++;
	$con= base64_decode(substr($f,strpos($f,',')));
	file_put_contents("{$i}.jpg", $con);
}

 ?>