<?php 

for ($i=0; $i < 10; $i++) { 
	if($i == 5){
		//略过此次循环，所以结果没有5
		continue;
	}
	echo $i . '<br/>';
}


 ?>