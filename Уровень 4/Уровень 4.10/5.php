<?php

function splitIntoSyllables($word) {
    $pattern = '/[^aeiouyаеёиоуыэюя]+[aeiouyаеёиоуыэюя]|[aeiouyаеёиоуыэюя]+[^aeiouyаеёиоуыэюя]*|[^aeiouyаеёиоуыэюя]+$/iu';
    preg_match_all($pattern, $word, $matches);
    return $matches[0];
}

// Example usage
$word = "абрикос";
print_r(splitIntoSyllables($word));
?>