<?php

$arr_A=[1,3,6,9]; 
$arr_B=[2,4,5,8,20];
Combine($arr_A,$arr_B) ;
function Combine($arr_A,$arr_B) { 
       $arr='';
       foreach ($arr_B as $key => $v) {
            $arr_A[]=$v;
            $arr=$arr_A;     
       }
      $count= count($arr);

      $temp= 0;
      for($i=0;$i<$count;$i++){
        for($j=0;$j<$count-1-$i ;$j++){
            if($arr[$j]>$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
      }
print_r($arr);
}
?>