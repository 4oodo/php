<?php

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function getPrimeDivisors($number) {
    $primeDivisors = [];
    for ($i = 2; $i <= $number; $i++) {
        if ($number % $i == 0 && isPrime($i)) {
            $primeDivisors[] = $i;
        }
    }
    return $primeDivisors;
}

$number = 28;
print_r(getPrimeDivisors($number));
?>