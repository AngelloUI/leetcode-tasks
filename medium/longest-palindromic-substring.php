<?php
function longestPalindrome($s): string {
    $longestPalindrome = "";
    $length = 0;
    for ($i = 0; $i < strlen($s); ++$i){
        $str = "";
        for ($j = $i; $j < strlen($s); ++$j){
            $str .= $s[$j];
            if ($str === strrev($str) and $length < strlen($str)){
                $longestPalindrome = $str;
                $length = strlen($str);
            }
        }
    }
    return $longestPalindrome;
}
echo longestPalindrome("cbbd");