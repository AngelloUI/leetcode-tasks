<?php
function plusOne($digits): array {
    for ($i = count($digits)-1; $i >= 0; --$i){
        if ($digits[$i]+1 == 10){
            $digits[$i] = 0;
        }else{
            $digits[$i]++;
            break;
        }
    }
    if (!$digits[0]){
        $digits[0] = 1;
        $digits[] = 0;
    }
    return $digits;
}
$digits = array(2,9,8);
$digits = plusOne($digits);
foreach ($digits as $d){
    echo $d;
}
