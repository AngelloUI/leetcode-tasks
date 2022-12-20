<?php
function interpret($command): string {
    $command = str_replace("()","o",$command);
    return str_replace("(al)","al",$command);
}
echo interpret("(al)G(al)()()G");