<?php
function finalValueAfterOperations($operations): int {
    $x = 0;
    foreach ($operations as $operation){
        switch ($operation){
            case "++X":
                ++$x;
                break;
            case "X++":
                $x++;
                break;
            case "--X":
                --$x;
                break;
            case "X--":
                $x--;
                break;
            default:
                echo "sth is wrong";
                break;
        }
    }
    return $x;
}
echo finalValueAfterOperations(["++X","++X","X++"]);