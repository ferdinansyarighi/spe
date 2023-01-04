<?php

echo needle(["red","blue","yellow","black","grey"],"blue");

function needle($arr,$needle){
    $arrLength = count($arr);
    $a = "";
    for($i = 0; $i < $arrLength; $i++) {
        if($arr[$i]==$needle){
            $a = $i;
        }
    }
    if($a != ""){
        return $a;
    }else{
        return "not found";
    }
}

?>