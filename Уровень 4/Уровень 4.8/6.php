<?php

function getRandomArray($n, $min, $max) {
    if ($n <= 0 || $min > $max) {
        return [];
    }

    $array = [];
    $lastNumber = null;

    for ($i = 0; $i < $n; $i++) {
        do {
            $number = rand($min, $max);
        } while ($number === $lastNumber);

        $array[] = $number;
        $lastNumber = $number;
    }

    return $array;
}

print_r(getRandomArray(10, 1, 100));
?>