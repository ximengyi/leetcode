<?php

$s = "babadada";
//$s ="aaaabbbbbbbbbbccccccccccddddddddddeeeeeeeeeeffffffffffgggggggggghhhhhhhhhhiiiiiiiiiijjjjjjjjjjkkkkkkkkkkllllllllllmmmmmmmmmmnnnnnnnnnnooooooooooppppppppppqqqqqqqqqqrrrrrrrrrrssssssssssttttttttttuuuuuuuuuuvvvvvvvvvvwwwwwwwwwwxxxxxxxxxxyyyyyyyyyyzzzzzzzzzzyyyyyyyyyyxxxxxxxxxxwwwwwwwwwwvvvvvvvvvvuuuuuuuuuuttttttttttssssssssssrrrrrrrrrrqqqqqqqqqqppppppppppoooooooooonnnnnnnnnnmmmmmmmmmmllllllllllkkkkkkkkkkjjjjjjjjjjiiiiiiiiiihhhhhhhhhhggggggggggffffffffffeeeeeeeeeeddddddddddccccccccccbbbbbbbbbbaaaaaaaabbbbbbbbbbccccccccccddddddddddeeeeeeeeeeffffffffffgggggggggghhhhhhhhhhiiiiiiiiiijjjjjjjjjjkkkkkkkkkkllllllllllmmmmmmmmmmnnnnnnnnnnooooooooooppppppppppqqqqqqqqqqrrrrrrrrrrssssssssssttttttttttuuuuuuuuuuvvvvvvvvvvwwwwwwwwwwxxxxxxxxxxyyyyyyyyyyzzzzzzzzzzyyyyyyyyyyxxxxxxxxxxwwwwwwwwwwvvvvvvvvvvuuuuuuuuuuttttttttttssssssssssrrrrrrrrrrqqqqqqqqqqppppppppppoooooooooonnnnnnnnnnmmmmmmmmmmllllllllllkkkkkkkkkkjjjjjjjjjjiiiiiiiiiihhhhhhhhhhggggggggggffffffffffeeeeeeeeeeddddddddddccccccccccbbbbbbbbbbaaaa";
//$s ="ssooosod";
$s = 'ac';
//dsoooosf

function is_huiwen($s,$left,$right){
     $max = 0;
     $start = 0;
    while ($left >= 0 && isset($s[$right])) {

        if ($s[$left] == $s[$right]) {
            $len = $right - $left + 1;
            if ($max < $len) {
                $max = $len;
                $start = $left;

            }
            $left--;
            $right++;
        } else {
            break;
        }
    }
    $max_str = substr($s,$start,$max);
    echo "====start==={$start}===max====$max=====str={$max_str}===\n";
    return [$start,$max];
}

$s ='acbf';
function test($s)
{
    $start = 0;
    $max = 0;
    $max_str ='';
    for ($i = 1; isset($s[$i]); $i++) {
        $left = $i - 1;
        if ($s[$i]  == $s[$left]) {
             $right = $i;
             $res = is_huiwen($s,$left,$right);
             if($max < $res[1]){
                 $max =$res[1];
                 $start = $res[0];
              }
            }

        $right = $i+1;
       $res = is_huiwen($s,$left,$right);

       if($max < $res[1]){
           $max =$res[1];
           $start = $res[0];
       }
    }

    if($max>1){
        $max_str = substr($s,$start,$max);
    }

    if($max == 0){
        $max_str = $s[0];
    }

    echo ">>>>>>>>>>res====={$max_str}";
}

test($s);
