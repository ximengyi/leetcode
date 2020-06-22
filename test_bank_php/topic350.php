<?php

class Solution {

    /**时间复杂读O(m*n)
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        $res = [];

        foreach ($nums1 as $key1 => $val1){

            foreach ($nums2 as $key2=>$val2){
                if($val1 == $val2){
                   $res [] = $val1;
                   unset($nums2[$key2]);
                   break;
                }
            }
        }
        var_dump($res);
       return $res;
    }

    /**
     * 方法二利用hash 函数时间复杂度 O（m+n）
     * @param $nums1
     * @param $nums2
     * @return array
     */
    function intersect2($nums1, $nums2) {
        $res  = [];
        $temp = [];
        foreach ($nums1 as $val1){

            if(isset($temp[$val1])){
                $temp[$val1]++;

            }else{
                $temp[$val1] = 1;
            }
        }
        foreach ($nums2 as $key2=>$val2){

            if(isset($temp[$val2]) && $temp[$val2] >0){
                $res [] = $val2;
                $temp[$val2]--;

            }
        }
        return $res;
    }
}
//$nums1 = [1,2,2,1];
//$nums2 = [2,2];
$nums1 = [4,4,4];
$nums2 = [9,4,9,8,4];

$solution  = new Solution();
$solution->intersect2($nums1,$nums2);