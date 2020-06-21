<?php

class Solution {

    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str) {
        $str = trim($str);
        $pattern = "/^[-+]?[0-9]+/";
        preg_match($pattern,$str,$matches);
        if(!empty($matches[0]) && is_numeric($matches[0])){

            if((int)$matches[0]<-2147483648){
                return -2147483648;
            }elseif($matches[0]>2147483647){
                return 2147483648;
            }
            var_dump((int)$matches[0]);
            return (int)$matches[0];
        }else{
            var_dump($matches[0]);
            echo "0";
            return 0;
        }

    }
}
$s ="-5-";

$solution = new Solution();
$solution->myAtoi($s);
