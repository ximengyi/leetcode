<?php

class Solution {

/**
* @param Integer $x
* @return Integer
*/


function reverse($x) {

    if($x>0){
        $x = (string)$x;
        $x = strrev($x);
        $x= intval($x);
        if($x > (pow(2,31)-1)){
            return 0;
        }

        return $x;

    }else{
        $x = abs($x);
        $x = strrev((string)$x);
        $x = '-'.$x;
        $x= (int)$x;
        if($x < (pow(-2,31) -1)){
            return 0;
        }

        return $x;

    }

  }



}

$x = -123;
$x = 456;
$x = 1534236469;
//echo pow(2,31)-1;
////die;
$solution = new Solution();
$solution->reverse($x);

//if(9646324351 > 2147483647 ){
//    echo 1111;
//}