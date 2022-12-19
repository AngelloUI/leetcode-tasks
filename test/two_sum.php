<?php
function twoSum($nums, $target)
{
    $indexes[0] = 0;
    $indexes[1] = 0;
    for ($i = 0; $i < count($nums); ++$i) {
        for ($j = $i + 1; $j < count($nums); ++$j) {
            if ($nums[$i] + $nums[$j] == $target) {
                /*print "i = $i j = $j";
                break;
                */
                $indexes[0] = $i;
                $indexes[1] = $j;
                return $indexes;
            }
        }
    }
}

$nums = array(3, 3);
$target = 6;
twoSum($nums, $target);

