<?php

print_r(blueOcean([1,2,3,4,6,10], [1]));

//manual function
function blueOcean($arr,$remover){
    $arrLength  = count($arr);
    $arrLength2 = count($remover);
    $a=array();

    for($i = 0; $i < $arrLength; $i++) {
        for($j = 0; $j < $arrLength2; $j++) {
            if ($arr[$i] != $remover[$j]){
                array_push($a,$arr[$i]);
            }
        }
    }

    return $a;
}

//simplest function
function blueOcean2($arr,$remover){
    return array_diff($arr, $remover);
}

?>