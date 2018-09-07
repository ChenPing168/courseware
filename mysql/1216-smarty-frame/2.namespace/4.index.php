<?php namespace A;
include "./function.php";
//先寻找当前的命名空间是否有dump
//如果有直接调用当前空间的
//如果没有就调用全局(没有定义命名空间)的
dump(123);


 ?>