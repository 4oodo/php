<?php

function getUniqueRandomArray($n, $min, $max) {
    if ($n <= 0 || $min > $max || $n > ($max - $min + 1)) {
        return [];
    }

    $numbers = range($min, $max);
    shuffle($numbers);

    return array_slice($numbers, 0, $n);
}

print_r(getUniqueRandomArray(10, 1, 100));
?>