<?php

class Solution
{
    function climbStairs($n): int
    {
        $a[0] = 1;
        $a[1] = 1;
        for ($i = 2; $i <= $n; ++$i) {
            $a[$i] = $a[$i - 1] + $a[$i - 2];
        }
        return $a[$n];
    }
}
$solution = new Solution();
print $solution->climbStairs();