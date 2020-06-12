
<?php

function findMedianSortedArrays($nums1, $nums2) {
    $array = [];
    $new_array = array_merge($nums1,$nums2);
    sort($new_array);
    $len = count($new_array);
    if($len % 2 == 0){
     $index = $len/2;
     $middle =  ($new_array[$index]+$new_array[$index-1])/2;
    }else{
       $index = ($len+1)/2 -1;
       $middle = $new_array[$index];
    }
   echo  $middle;
}

$nums1 = [1,2,3];
$nums2 = [0,0];

findMedianSortedArrays($nums1,$nums2);