<?php

//解法1使用php sort 函数排序
function merge1(&$nums1, $m, $nums2, $n) {
    foreach ( $nums2 as $key=>$value){
        $nums1[$m] = $value;
        $m++;
    }
    sort($nums1);
    return $nums1;

}

//揭发2使用子排序算法
function merge(&$nums1, $m, $nums2, $n) {

     foreach ( $nums2 as $value){
         $nums1[$m] = $value;
         for ($i =0;$i<$m;$i++){
              if($nums1[$i] >$nums1[$m]){
                  $temp = $nums1[$i];
                  $nums1[$i] =$nums1[$m];
                  $nums1[$m] = $temp;
              }
         }
         $m++;
     }
    //sort($nums1);
    return $nums1;

}


$nums1 = [4,5,6,0,0,0];
$nums2 = [1,2,3];

$res = merge($nums1,3,$nums2,3);

var_dump($res);