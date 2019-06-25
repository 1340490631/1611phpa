<?php
header("content-type:text/html;charset=utf-8");
$str='aaaaklsjjfkasa';
$arr=[];
for ($i=0; $i <strlen($str) ; $i++) { 
	if(array_key_exists($str[$i], $arr)){
		$arr[$str[$i]]+=1;
		if($arr[$str[$i]]==2){
			echo "第一个只出现一次的字符是:".$str[$i];break;
		}
	}else{
		$arr[$str[$i]]=1;
	}
}
?>