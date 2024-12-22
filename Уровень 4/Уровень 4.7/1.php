<?php

function sortWordsAlphabetically($text) {
    $words = explode(' ', $text);
    sort($words);
    return implode(' ', $words);
}

$text = 'hello world example';
$result = sortWordsAlphabetically($text);
echo $result;
?>