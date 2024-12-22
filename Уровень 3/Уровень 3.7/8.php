<?php

function capitalizeLastLetter($string) {
    $words = explode(' ', $string);
    foreach ($words as &$word) {
        $length = strlen($word);
        if ($length > 0) {
            $word[$length - 1] = strtoupper($word[$length - 1]);
        }
    }
    return implode(' ', $words);
}

$inputString = "hello world this is a test";
$resultString = capitalizeLastLetter($inputString);

echo $resultString;
?><?php
