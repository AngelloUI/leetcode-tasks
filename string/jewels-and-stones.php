<?php
function numJewelsInStones($jewels, $stones): int
{
    $countJewelsInStones = 0;
    for ($stoneIndex = 0; $stoneIndex < strlen($stones); ++$stoneIndex){
        for ($jewelsIndex = 0; $jewelsIndex < strlen($jewels); ++$jewelsIndex){
            if ($stones[$stoneIndex] === $jewels[$jewelsIndex]){
                ++$countJewelsInStones;
                break;
            }
        }
    }
    return $countJewelsInStones;
}
echo numJewelsInStones("aA","aAAbbbb");