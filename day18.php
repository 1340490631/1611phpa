<?php
header("content-type:text/html;charset=utf-8");

function Num($n){
	$num=decbin($n);
	$str=substr_count($num,'1');
	return $str;

}
echo '该数二进制表示中1的个数为：'.num(10).'个';



?>