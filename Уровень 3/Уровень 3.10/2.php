<?php

function isDivisor($number, $divisor) {
    return $divisor % $number === 0;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$givenNumber = 20;
$result = array_filter($array, function($number) use ($givenNumber) {
    return isDivisor($number, $givenNumber);
});

print_r($result);
?>