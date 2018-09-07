<?php 
//单引号
//里面不可以解析变量
/*$var = '--houdunwang--';
$str = 'ab\\\'cdefg$var';
echo $str;*/

/*$e = '123';
//能不能被解析要看最外层引号
$str = 'abcd"{$e}"';
echo $str;*/



//双引号
/*//里面可以解析变量
$var = '--houdunwang--';
//{}分离变量
//\r\n 换行，需要通过查看”源代码“
$str = "{$var}abc\r\ndef\$g";
echo $str;*/


/*//定界符
//里面可以解析变量
$var = '--houdunwang--';
  $str = <<<sss
 {$var}abc'"
sss;
echo $str;*/














 ?>