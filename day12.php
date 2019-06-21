<?php
header("content-type:text/html;charset=utf8");
$n=1;
$m=100;
function day12($n,$m)
{
	$res=range($n,$m);
	$data=array_sum($res);
	return $data;
}
echo $n."到".$m."的和是：";
 print_r(day12($n,$m))
?>