<?php

$s = 'hijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789hyijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789hijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789hijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789hijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789hijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
function test($s){
$count =0;
$max = 0;
for ($i=0; isset($s[$i]); $i++) { 
    $temp =[];
    for ($j=$i; isset($s[$j]); $j++) { 
            if(isset($temp[ord($s[$j])])){
            $count = $j-$i;
            if($max<$count) $max = $count;
        break;
            }
        $temp[ord($s[$j])]= true;
        $count =count($temp);
        if($max<$count){
            $max = $count;
        }
    }
}
echo $max;
}

 test($s);
