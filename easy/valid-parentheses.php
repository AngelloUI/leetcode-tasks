<?php
function isValid($s): bool
{
    $isValid = false;
    $stack = "";
    for ($i = 0; $i < strlen($s); ++$i) {
        if (($s[$i] == '[') || ($s[$i] == '(') || ($s[$i] == '{')) {
            $stack .= $s[$i];
        } else {
            if ($s[$i] == ']'){
                if ($stack[-1] == '['){
                    $stack = substr($stack,0,strlen($stack)-1);
                }else{
                    $stack .= $s[$i];
                    break;
                }
            }
            if ($s[$i] == '}'){
                if ($stack[-1] == '{'){
                    $stack = substr($stack,0,strlen($stack)-1);
                }else{
                    $stack .= $s[$i];
                    break;
                }
            }
            if ($s[$i] == ')'){
                if ($stack[-1] == '('){
                    $stack = substr($stack,0,strlen($stack)-1);
                }else{
                    $stack .= $s[$i];
                    break;
                }
            }
        }
    }
    if ($stack == ""){
        $isValid = true;
    }
    return $isValid;
}

echo isValid("()");