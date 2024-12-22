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

$number1 = 60;
$number2 = 48;

$divisors1 = getDivisors($number1);
$divisors2 = getDivisors($number2);

$commonDivisors = array_intersect($divisors1, $divisors2);

print_r($commonDivisors);
?>