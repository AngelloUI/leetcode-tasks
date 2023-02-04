<?php
function removeDuplicates(&$nums): int {
    $a = [];
    for ($i = 0; $i < count($nums); ++$i ){
        $a[$nums[$i]] = 1;
    }
    $j = 0;
    for ($i = -100; $i <= 100; ++$i){
        if (isset($a[$i])){
           $nums[$j] = $i;
           ++$j;
        }
    }
    for ($i = $j; $i < count($nums); ++$i){
        $nums[$i] = '_';
    }
    return $j;
}
$a = [0,0,1,1,1,2,2,3,3,4];
echo removeDuplicates($a), "\n";
foreach ($a as $i){
    echo $i, "\n";
}
