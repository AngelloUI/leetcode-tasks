<?php
function smallerNumbersThanCurrent($nums): array {
    $result = [];
    for ($i = 0; $i < count($nums); ++$i){
        $smaller = 0;
        for ($j = 0; $j < count($nums); ++$j){
            if ($i == $j){
                continue;
            }
            if ($nums[$i] > $nums[$j]){
                ++$smaller;
            }
        }
        $result[] = $smaller;
    }
    return $result;
}
var_dump(smallerNumbersThanCurrent([8,1,2,2,3]));