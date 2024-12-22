<?php

$string = '1 22 333 4444 22 5555 1';
$words = explode(' ', $string);
$result = [];

foreach ($words as $word) {
    if (strlen($word) <= 3) {
        $result[] = $word;
    }
}

echo implode(' ', $result);
?>