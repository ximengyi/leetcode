<?php

$s = "babadada";
//  function is_palindrome($s){
//      var_dump($s);
//      $count = strlen($s);
//      $len = $count/2;
//      for ($i =0;$i < $len;$i++){
//           $count--;
//           if($s[$i] != $s[$count]){
//
//            return false;
//           }
//
//      }
//        return true;
//
//  }
//
//
//function longestPalindrome($s) {
//
//      if(is_palindrome($s)){
//          return $s;
//      }
//
//       $longest_arr = [];
//       $start = 0;
//       $max = 0;
//       $max_str =$s[0];
//    for ($i=0;isset($s[$i]);$i++){
//        if(isset($longest_arr[ord($s[$i])])){
//         $start = $longest_arr[ord($s[$i])];
//         $len = $i -$start + 1;
//         $temp_str = substr($s,$start,$len);
//         if(is_palindrome($temp_str)){
//
//             if($max < $len){
//                 $max = $len;
//                 $max_str = $temp_str;
//             }
//
//         }else{
//             $start = $i;
//         }
//
//        }
//            $longest_arr[ord($s[$i])] = $i;
//
//    }
//  //  echo $max;
//    echo $max_str;
//}
//
//longestPalindrome($s);
////$s = 'badfabad';
////longestPalindrome($s);
// //echo substr($s,0,1);
////is_palindrome($a);
///
/// //"aaaabbbbbbbbbbccccccccccddddddddddeeeeeeeeeeffffffffffgggggggggghhhhhhhhhhiiiiiiiiiijjjjjjjjjjkkkkkkkkkkllllllllllmmmmmmmmmmnnnnnnnnnnooooooooooppppppppppqqqqqqqqqqrrrrrrrrrrssssssssssttttttttttuuuuuuuuuuvvvvvvvvvvwwwwwwwwwwxxxxxxxxxxyyyyyyyyyyzzzzzzzzzzyyyyyyyyyyxxxxxxxxxxwwwwwwwwwwvvvvvvvvvvuuuuuuuuuuttttttttttssssssssssrrrrrrrrrrqqqqqqqqqqppppppppppoooooooooonnnnnnnnnnmmmmmmmmmmllllllllllkkkkkkkkkkjjjjjjjjjjiiiiiiiiiihhhhhhhhhhggggggggggffffffffffeeeeeeeeeeddddddddddccccccccccbbbbbbbbbbaaaaaaaabbbbbbbbbbccccccccccddddddddddeeeeeeeeeeffffffffffgggggggggghhhhhhhhhhiiiiiiiiiijjjjjjjjjjkkkkkkkkkkllllllllllmmmmmmmmmmnnnnnnnnnnooooooooooppppppppppqqqqqqqqqqrrrrrrrrrrssssssssssttttttttttuuuuuuuuuuvvvvvvvvvvwwwwwwwwwwxxxxxxxxxxyyyyyyyyyyzzzzzzzzzzyyyyyyyyyyxxxxxxxxxxwwwwwwwwwwvvvvvvvvvvuuuuuuuuuuttttttttttssssssssssrrrrrrrrrrqqqqqqqqqqppppppppppoooooooooonnnnnnnnnnmmmmmmmmmmllllllllllkkkkkkkkkkjjjjjjjjjjiiiiiiiiiihhhhhhhhhhggggggggggffffffffffeeeeeeeeeeddddddddddccccccccccbbbbbbbbbbaaaa"
$s ="sooos";
function test($s)
{
    $max_str = '';
    $max = 0;
    for ($i = 0; isset($s[$i]); $i++) {
        if ($i < 2) {
            $max = $i;
            $max_str = $s[0];

        }
        $left = $i - 1;
        $right = $i + 1;
        if ($s[$i] == $s[$left] && ($s[$i]!=$s[$right])) {
            $right = $i;

        }
        while (isset($s[$left]) && isset($s[$right])) {

            if ($s[$left] == $s[$right]) {
                $len = $right - $left + 1;
                $temp_str = substr($s, $left, $len);
                if ($max < $len) {
                    $max = $len;
                    $max_str = $temp_str;
                }
                $left--;
                $right++;
            } else {
                break;
            }

            if ($left < 0) {
                $left = 0;
                if($s[$left] !=$s[$i]){
                    break;
                }

            }

        }
    }
    var_dump($max_str);
}

//echo $s[-1];

test($s);