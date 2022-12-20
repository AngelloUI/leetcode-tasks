<?php
function restoreString($s, $indices): string{
    $order = array();
    for ($i = 0; $i < strlen($s); ++$i){
        $order[$indices[$i]] = $s[$i];
    }
    $modifyingOrder = "";
    for ($i = 0; $i < strlen($s); ++$i){
        $modifyingOrder .= $order[$i];
    }
    return $modifyingOrder;
}
echo restoreString("codeleet",[4,5,6,7,0,2,1,3]);