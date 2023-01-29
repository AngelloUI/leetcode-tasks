<?php
function romanToInt($s): int
{
    $romanIntEquivalent = ["I" => 1, "V" => 5, "X" => 10, "L" => 50, "C" => 100, "D" => 500, "M" => 1000];
    $number = 0;
    for ($i = 0; $i < strlen($s); ++$i) {
        if ($i + 1 == strlen($s)) {
            $number += $romanIntEquivalent[$s[$i]];
        } else {
            if ($romanIntEquivalent[$s[$i]] >= $romanIntEquivalent[$s[$i+1]]) {
                $number += $romanIntEquivalent[$s[$i]];
            } else {
                $number -= $romanIntEquivalent[$s[$i]];
            }
        }
    }
    return $number;
}
echo romanToInt("MCMXCIV");