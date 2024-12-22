<?php

function removeVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    return str_replace($vowels, '', $string);
}

$inputString = "Hello, World!";
$resultString = removeVowels($inputString);

echo $resultString;
?>