<?php

class Solution {


    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {

        $len = count($height);
        $max =0;

        for ($i=0;$i<$len;$i++){

            for ($j =$i+1;$j<$len;$j++){

                $area = min($height[$j],$height[$i])*($j-$i);
                if($max<$area){
                    $max = $area;
                }

            }
        }
        echo "====={$max}=====";
        return $max;
    }

    function maxArea2($height) {

        $len = count($height);
        $max =0;
        $left= 0;
        $right  = $len-1;

        while($left < $right){
            $area = min($height[$left],$height[$right])*($right-$left);
            echo "==={$left}={$right}={$area}=====\n";
            if($max<$area){
                $max = $area;
            }
            if($height[$left]<$height[$right]){
                $left++;
            }else{
                $right--;
            }
        }

      //  echo "====={$max}=====";
        return $max;
    }
}

$x =[2,3,4,5,18,17,6];
$solution = new Solution();
$solution->maxArea2($x);