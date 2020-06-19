<?php

class Solution
{
// 使用php 正则替换子符串要快的多
    /**
     * @param String $s
     * @return Boolean
     */

    function is_need_str($a){

        if(is_numeric($a)){
            echo "true";
            return true;
        }

        $a = strtolower($a);
        if(($a>='a') && ($a <= 'z')){
            echo "true";
            return true;
        }
        echo "false";
        return false;

    }

    function isPalindrome($s)
    {
        if(empty($s)){
            echo "str===yes";
            return true;
        }
        $str = '';
        for ($i=0;isset($s[$i]); $i++){

            if($this->is_need_str($s[$i])){
                $str .= strtolower($s[$i]);
            }
        }
        $len = strlen($str);

         $left =0;
         $right = $len-1;

         while ($left < $right){
             if($str[$left] != $str[$right]){
                 return false;
             }

             $left++;
             $right--;
         }

          echo "str===yes";
           return true;
    }


}

$solution = new Solution();
$s ="ac";

$solution->isPalindrome($s);