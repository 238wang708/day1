<?php
$res="Have you ever gone shopping and";
re($res);
function re($res){
 
 $str=strlen($res);
   echo '字符串的长度为';
    print_r($str);
    echo "<br>";
$arr=[];
 for($i=0;$i<$str;$i++){
    if(isset($arr[$res[$i]])){
        $arr[$res[$i]]++;
    }else{
        $arr[$res[$i]]=1;
    }
 
         if ($arr[$res[$i]]>=3) {
              return $res[$i];
         }
    } 
    return $arr;
}

  print_r(re($res));