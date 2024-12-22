<?php

$text = "Вот пример текста с некоторыми словами, начинающимися на букву а, например, апельсин, и другими, которые не начинаются, например, банан.";
$words = explode(' ', $text);
$wordsStartingWithA = [];

foreach ($words as $word) {
    if (mb_strtolower(mb_substr($word, 0, 1)) === 'а') {
        $wordsStartingWithA[] = $word;
    }
}

print_r($wordsStartingWithA);
?>