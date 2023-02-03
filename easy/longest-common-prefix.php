<?php
function longestCommonPrefix($strs): string {
    $commonPrefix = "";
    $fix = "";
    for ($i = 0; $i < strlen($strs[0]); ++$i){
        $commonPrefix .= $strs[0][$i];
        $check = true;
        for ($j = 0; $j < count($strs); ++$j){
            if (stripos($strs[$j],$commonPrefix) !== 0 || stripos($strs[$j],$commonPrefix) === false){
                $check = false;
                break;
            }
        }
        if ($check === false){
            break;
        }
        $fix = $commonPrefix;
    }
    return $fix;
}
echo longestCommonPrefix(["dog","racecar","car"]);