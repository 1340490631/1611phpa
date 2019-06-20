<?php 
echo phpinfo();die;
header('content-type:text/html;charset=utf-8'); 
    //array_key_exists  判断字符是否 存在数组的键中  
// echo phpinfo();die;

//----------------------------------------------------------------
    // $str='Have you ever gone shopping and';
    // $arr=[];  
    // for ($i=0; $i <strlen($str) ; $i++) {   
    //     if(array_key_exists($str[$i], $arr)){  

    //         $arr[$str[$i]]+=1;  
            
    //         if($arr[$str[$i]] == 3){  
    //             echo '第三次出现的字母是:'. $str[$i];break;  
    //         }  
    //     }else{  
    //         $arr[$str[$i]]=1;  
    //     }  
    // }

//---------------------------------------------------------------

// function is_shuixianhua($i)
// {

//     $length=strlen($i);
//     $i=(string)$i;
//     $sum=0;
//     for($j=0;$j<$length;$j++)
//     {
//         $sum+=pow($i{$j},$length);//计算我的几次方
//     }
//     return $sum==$i;
// }




//--------------------------------------------------------------




// 	function cube( $n )
// 	{
// 	    return $n * $n * $n;
// 	}

// 	function is_narcissistic ( $n )
// 	{
// 	    $hundreds = floor( $n / 100);    //分解出百位
// 	    $tens = floor( $n / 10 ) % 10;    //分解出十位
// 	    $ones = floor( $n % 10 );    //分解出个位
// 	    return (bool)(cube($hundreds)+cube($tens)+cube($ones) == $n);
// 	}

 
// for ( $i = 100; $i < 1000; ++ $i )
// {
//     if ( is_narcissistic($i) )
//         echo $i."<p>";
// }

//----------------------------------------------------------------

// for($q=1;$q<=9;$q++){
//     for($w=0;$w<=9;$w++){
//       for($e=0;$e<=9;$e++){
//         if($q*$q*$q + $w*$w*$w + $e*$e*$e ==
//          100*$q + 10*$w + $e){
//            echo "$q $w $e "."<p>";
//         }
//       }
//     }
// }


?>


 <script>
for (var i=100; i < 1000; i++) { 
	a=parseInt(i%10);//分解出个位
	b=parseInt(i/10%10);//分解出十位
	c=parseInt(i/100%10);//分解出百位
	if(c*c*c+b*b*b+a*a*a==i){
		document.write(i+"<p>");
	}
}
 </script>