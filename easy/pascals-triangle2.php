<?php
function getRow($rowIndex): array {
    $rowArray = [];
    for ($j = 0; $j <= $rowIndex; ++$j){
        $f1 = 1;
        for ($k = 1; $k <= $rowIndex; ++$k){
            $f1 *= $k;
        }
        $f2 = 1;
        for ($k = 1; $k <= $j; ++$k){
            $f2 *= $k;
        }
        $f3 = 1;
        for ($k = 1; $k <= ($rowIndex-$j); ++$k){
            $f3 *= $k;
        }
        $rowArray[$j] = $f1/$f2/$f3;
    }
    return $rowArray;
}
var_dump(getRow(3));