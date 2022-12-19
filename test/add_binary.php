<?php
function addBinary($a, $b): string
{
    $intA = 0;
    $intB = 0;
    $j = 0;
    for ($i = strlen($b) - 1; $i >= 0; --$i) {
        $intB += (int)$b[$i] * (2 ** $j);
        ++$j;
    }
    $j = 0;
    for ($i = strlen($a) - 1; $i >= 0; --$i) {
        $intA += (int)$a[$i] * (2 ** $j);
        ++$j;
    }
    $sum = $intB + $intA;
    if ($sum == 0){
        $res = "0";
    }else{
        $res = "";
    }
    while ($sum >= 1) {
        $res .= ($sum % 2);
        $sum = intdiv($sum,2);
    }

    return strrev($res);

}

print addBinary("11", "1");