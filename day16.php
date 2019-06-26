<?php
header("content-type:text/html;charset=utf-8");
 $target = 100;
 $array = [[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];

 $cont=array_merge($array[0],$array[1],$array[2],$array[3]);
 $cont1=count($cont);
 if(!in_array($target, $cont)){
 	echo 0;
 }else{
 	echo 1;
 }

?>