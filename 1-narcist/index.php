<?php

echo narcist(111);

function narcist($num){$arr = str_split($num);
    $arrLength = count($arr);
    $result = 0;
    for($i = 0; $i < $arrLength; $i++) {
        $add = pow($arr[$i],$arrLength);
        $result += $add;
    }
    if($result == $num){
        return "true";
    }else{
        return "false";
    }
}

?>