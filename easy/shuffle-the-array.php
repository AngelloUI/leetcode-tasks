<?php
function shuffle($nums, $n): array
{
    $n *= 2;
    $shuffleArray = [];
    for ($i = 0, $j = $n / 2; $i < $n / 2, $j < $n; ++$i, ++$j) {
        $shuffleArray[] = $nums[$i];
        $shuffleArray[] = $nums[$j];
    }
    return $shuffleArray;
}
var_dump(shuffle([2,5,1,3,4,7],3));
