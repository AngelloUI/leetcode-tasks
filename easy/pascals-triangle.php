<?php
function generate($numRows): array {
    $pascalsTriangle = [];
    for ($i = 0; $i < $numRows; ++$i){
        $rowArray = [];
        for ($j = 0; $j <= $i; ++$j){
            $f1 = 1;
            for ($k = 1; $k <= $i; ++$k){
                $f1 *= $k;
            }
            $f2 = 1;
            for ($k = 1; $k <= $j; ++$k){
                $f2 *= $k;
            }
            $f3 = 1;
            for ($k = 1; $k <= ($i-$j); ++$k){
                $f3 *= $k;
            }
            $rowArray[$j] = $f1/$f2/$f3;
        }
        $pascalsTriangle[] = $rowArray;
    }
    return $pascalsTriangle;
}
var_dump(generate(1));