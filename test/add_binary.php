<?php
function addBinary($a, $b): string
{
    if (strlen($a) > strlen($b)){
        $j = strlen($b)-1;
        for ($i = strlen($a) - 1; $i >= 0; --$i){
            if ($j >= 0){
                if ($a[$i] == "1" && $b[$j] == "1"){
                    $a[$i] = "2";
                }else if ($a[$i] == "1" || $b[$j] == "1"){
                    $a[$i] = "1";
                }else{
                    $a[$i] = "0";
                }
            }else{
                break;
            }
            --$j;
        }
        $result = $a;
    }else{
        $j = strlen($a)-1;
        for ($i = strlen($b) - 1; $i >= 0; --$i){
            if ($j >= 0){
                if ($b[$i] == "1" && $a[$j] == "1"){
                    $b[$i] = "2";
                }else if ($b[$i] == "1" || $a[$j] == "1"){
                    $b[$i] = "1";
                }else{
                    $b[$i] = "0";
                }
            }else{
                break;
            }
            --$j;
        }
        $result = $b;
    }
    $addToNext = 0;
    for ($i = strlen($result)-1; $i >= 0; --$i){
        $result[$i] = (string)((int)($result[$i]) + $addToNext);
        if (((int)$result[$i]) > 1){
            $addToNext = 1;
            $result[$i] = (string)((int)$result[$i] - 2);
            continue;
        }
        $addToNext = 0;
    }
    if ($addToNext != 0){
        $result = "1".$result;
    }
    return $result;
}

echo addBinary("100", "110010");