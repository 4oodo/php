<?php

function categorizeWordsByFirstLetter($text) {
    $words = preg_split('/\s+/', $text);
    $result = [];

    foreach ($words as $word) {
        $firstLetter = mb_substr($word, 0, 1, 'UTF-8');
        if (!isset($result[$firstLetter])) {
            $result[$firstLetter] = [];
        }
        $result[$firstLetter][] = $word;
    }

    return $result;
}

$text = "яблоко банан абрикос черника вишня";
print_r(categorizeWordsByFirstLetter($text));
?>