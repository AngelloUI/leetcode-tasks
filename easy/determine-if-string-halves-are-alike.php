<?php
function halvesAreAlike($s): bool {
    $vowels = 'aeiou';
    $leftHalf = 0;
    $rightHalf = 0;
    for ($i = 0; $i < strlen($s)/2;++$i){
        if (str_contains($vowels,strtolower($s[$i]))){
            ++$leftHalf;
        }else{
            --$leftHalf;
        }
    }
    for ($i = strlen($s)/2; $i < strlen($s);++$i){
        if (str_contains($vowels,strtolower($s[$i]))){
            ++$rightHalf;
        }else{
            --$rightHalf;
        }
    }
    if ($leftHalf == $rightHalf){
        return true;
    }
    return false;
}
echo halvesAreAlike("textbook");