<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

foreach (array_keys($array) as $index) {
    if (($index + 1) % 5 == 0) {
        unset($array[$index]);
    }
}

$array = array_values($array);

print_r($array);
?>