<?php

$string = 'aaa bbb ccc eee fff';
$words = explode(' ', $string);

foreach (array_keys($words) as $index) {
    if (($index + 1) % 2 == 0) {
        unset($words[$index]);
    }
}

$result = implode(' ', $words);

echo $result;
?>