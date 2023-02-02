<?php
function deleteGreatestValue($grid): int {
    $answer = 0;
    for ($k = 0; $k < count($grid[0]); ++$k){
        $maxInIteration = 0;
        for ($i = 0; $i < count($grid); ++$i){
            $maxInRow = 0;
            $indMaxInRow = 0;
            for ($j = 0; $j < count($grid[$i]); ++$j){
                if ($grid[$i][$j] >= $maxInRow){
                    $maxInRow = $grid[$i][$j];
                    $indMaxInRow = $j;
                }
            }
            $maxInIteration = max($maxInIteration,$maxInRow);
            $grid[$i][$indMaxInRow] = 0;
        }
        $answer += $maxInIteration;
    }
    return $answer;
}
echo deleteGreatestValue([[58,42,8,75,28],[35,21,13,21,72]]);