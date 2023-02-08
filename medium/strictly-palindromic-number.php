<?php
function isStrictlyPalindromic($n): bool {
    $isStrictlyPalindromic = true;
    for ($i = 2; $i <= $n-2; ++$i){
        $s = getCurrentBase($n,$i);
        if ($s != strrev($s)){
            $isStrictlyPalindromic = false;
            break;
        }
    }
    return $isStrictlyPalindromic;
}
function getCurrentBase($n,$base): string{
    $result = "";
    while ($n != 0){
        $result .= ($n % $base);
        $n /= $base;
    }
    return $result;
}
var_dump(isStrictlyPalindromic(4));
