<?php
function lengthOfLastWord($s): int {
    $s = trim($s," ");
    $a = explode(" ",$s);
    return strlen($a[count($a)-1]);
}
echo lengthOfLastWord("Hello World");