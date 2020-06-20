<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x <0){
            return false;
        }
        $y =0; $old_x = $x;
       while($x){
           $y = $y*10 + $x % 10;
           $x =(int) ($x/10);
           echo "===={$x}==={$y}=\n";
       }

       if($old_x == $y){
           return true;
       }else{
           return false;
       }

    }

    function isPalindrome2($x) {
        if($x <0){
            return false;
        }
        $x = (string) $x;
        $x_len = strlen($x);
        $left = 0;
        $right = $x_len -1;
        while($left < $right){
            echo "======={$left}=={$right}===\n";
            if($x[$left] != $x[$right]){
                echo "false";
                return false;
            }
            $left++;
            $right--;
        }
        echo "true";
        return true;
    }
}

$solution = new Solution();
$x = 121;
$solution->isPalindrome2($x);