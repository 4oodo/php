<?php

$string = 'a bc def ghij';
$words = explode(' ', $string);

foreach ($words as &$word) {
    if (strlen($word) <= 3) {
        $word = strtoupper($word);
    }
}

$result = implode(' ', $words);

echo $result;
?>