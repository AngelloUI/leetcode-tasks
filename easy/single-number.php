<?php
function singleNumber($nums): int {
    $a = [];
    $result = 0;
    for($i = -30000; $i <= 30000; ++$i){
        $a[$i] = 0;
    }
    for ($i = 0; $i < count($nums); ++$i){
        ++$a[$nums[$i]];
    }
    for($i = -30000; $i <= 30000; ++$i){
        if ($a[$i] == 1){
            $result = $i;
        }
    }
    return $result;
}
echo singleNumber([1]);