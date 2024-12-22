<?php

function fillArrayWithRandomNumbers($n, $min, $max) {
    $randomNumbers = [];
    for ($i = 0; $i < $n; $i++) {
        $randomNumbers[] = rand($min, $max);
    }
    return $randomNumbers;
}

// Example usage
$n = 10;
$min = 1;
$max = 100;
$result = fillArrayWithRandomNumbers($n, $min, $max);
print_r($result);
?>