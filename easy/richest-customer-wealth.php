<?php
function maximumWealth($accounts): int {
    $max = 0;
    for ($i = 0; $i < count($accounts); ++$i){
        $sum = 0;
        for ($j = 0; $j < count($accounts[$i]); ++$j){
            $sum += $accounts[$i][$j];
        }
        $max = max($max,$sum);
    }
    return $max;
}
echo maximumWealth([[2,8,7],[7,1,3],[1,9,5]]);