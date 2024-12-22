<?php

function getDivisors($number) {
    $divisors = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $divisors[] = $i;
        }
    }
    return $divisors;
}

function replaceWithDivisors($numbers) {
    foreach ($numbers as &$number) {
        $number = getDivisors($number);
    }
    return $numbers;
}

$numbers = [10, 15, 20];
$result = replaceWithDivisors($numbers);
print_r($result);
?>