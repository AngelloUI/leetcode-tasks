<?php
function mySqrt($x): int {
    $result = 0;
    for ($i = 0; $i < ($x+1/2); ++$i){
        if ($i * $i == $x){
            $result = $i;
            break;
        }else if ($i * $i > $x){
                $result = $i-1;
                break;
            }
    }
    return $result;
}
echo mySqrt(9);