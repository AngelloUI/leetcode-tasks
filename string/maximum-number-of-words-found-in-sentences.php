<?php
function mostWordsFound($sentences): int
{
    $maxAmountOfWords = 0;
    foreach ($sentences as $sentence) {
        $sentenceSpaces = 0;
        for ($i = 0; $i < strlen($sentence); ++$i) {
            if ($sentence[$i] == " ") {
                ++$sentenceSpaces;
            }
        }
        $maxAmountOfWords = max($maxAmountOfWords, $sentenceSpaces + 1);
    }
    return $maxAmountOfWords;
}
echo mostWordsFound(["alice and bob love leetcode", "i think so too", "this is great thanks very much"]);