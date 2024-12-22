<?php

$word = "слово";

$word = mb_convert_encoding($word, 'UTF-8', 'auto');

$lastLetter = mb_substr($word, -1);

if ($lastLetter === "ь") {
    $lastLetter = mb_substr($word, -2, 1);
}

echo "Последняя буква: " . $lastLetter;
?>