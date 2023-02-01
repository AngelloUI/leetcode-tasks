<?php
function toLowerCase($s): string {
    $sameLowerLetters = [
        'A'=>'a','B'=>'b',
        'C'=>'c','D'=>'d',
        'E'=>'e','F'=>'f',
        'G'=>'g','H'=>'h',
        'I'=>'i','J'=>'j',
        'K'=>'k','L'=>'l',
        'M'=>'m','N'=>'n',
        'O'=>'o','P'=>'p',
        'Q'=>'q','R'=>'r',
        'S'=>'s','T'=>'t',
        'U'=>'u','V'=>'v',
        'W'=>'w','X'=>'x',
        'Y'=>'y','Z'=>'z',
        ];
    for ($i = 0; $i < strlen($s);++$i){
        if (array_key_exists($s[$i],$sameLowerLetters)){
            $s[$i] = $sameLowerLetters[$s[$i]];
        }
    }
    return $s;
}
echo toLowerCase("HeLLo");