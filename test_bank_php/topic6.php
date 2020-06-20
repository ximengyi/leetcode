<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {

        $str1 = '';
        $str2 = '';
        $str3 = '';

            for ($i=0;isset($s[$i]);$i++){

                $str1 .= $s[$i];
                $i++;
                $str2 .= $s[$i];
                $i++;
                $str3 .= $s[$i];
                $i++;
                $str2 .= $s[$i];


            }
            $res = $str1.$str2.$str3;
            echo "==str==={$res}";
    }

    function convert2($s, $numRows) {

        if($numRows<2){
            echo $s;
            return $s;
        }

        $res_str = '';

        for ($j=0;$j<$numRows;$j++){

            $res_str .= $s[$j];

            for ($i = $j;isset($s[$i]);){

                if(($j==0) || ($j == $numRows-1)){
                    $i = $i + 2*$numRows - 2;
                    if(isset($s[$i]))
                    $res_str .= $s[$i];
                    echo "============$res_str======\n";
                    continue;
                }

                $i = $i + 2*($numRows-1-$j);
                echo "====$i===\n";
                $res_str .= $s[$i];

                $i = $i + 2*$j;
                if(isset($s[$i]))
                $res_str .=$s[$i];
            }

        }

        return $res_str;

    }
}

$s = "ABC";
$solution = new Solution();
$solution->convert2($s,2);

