<?php
function numIdenticalPairs($nums): int {
    $amountOfGoodPairs = 0;
    for ($i = 0; $i < count($nums); ++$i){
        for ($j = $i+1; $j < count($nums); ++$j){
            if ($nums[$i] == $nums[$j]){
                ++$amountOfGoodPairs;
            }
        }
    }
    return $amountOfGoodPairs;
}
echo numIdenticalPairs([1,2,3]);