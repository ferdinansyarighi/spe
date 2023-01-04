<?php

echo outlier([2, 4, 0, 100, 4, 11, 2602, 36]);

function outlier($arr){
    $flagodd = 0;
    $flageven = 0;
    $arrLength = count($arr);

    for($i = 0; $i < $arrLength; $i++) {
        if($arr[$i]%2==0){
            $flageven++;
            $resulteven = $arr[$i];
        }else{
            $flagodd++;
            $resultodd = $arr[$i];
        }
    }

    if($flageven == 1){
        return $resulteven;
    }else{
        return $resultodd;
    }
}

?>