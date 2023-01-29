<?php
function balancedStringSplit($s): int
{
    $countMaxBalanceSplits = 0;
    $stackStatus = 0;
    for ($i = 0; $i < strlen($s); ++$i) {
        if ($s[$i] == "R"){
            ++$stackStatus;
        }else{
            --$stackStatus;
        }
        if ($stackStatus == 0){
            ++$countMaxBalanceSplits;
        }
    }
    return $countMaxBalanceSplits;
}
echo balancedStringSplit("LLLLRRRR");