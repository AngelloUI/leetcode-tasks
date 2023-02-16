<?php
function maxProfit($prices): int {
    $maxProfit = 0;
    $minBuy = 100000;
    for ($i = 0; $i < count($prices); ++$i){
        $minBuy = min($minBuy,$prices[$i]);
        $maxProfit = max($maxProfit,$prices[$i]-$minBuy);
    }
    return $maxProfit;
}
echo maxProfit([7,1,5,3,6,4]);