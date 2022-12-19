<?php
function defangIPaddr($address): string {
    return str_replace(".","[.]",$address);
}
$address = "1.1.1.1";
echo defangIPaddr($address);