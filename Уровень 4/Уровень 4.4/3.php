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

$inputNumber = 12;
$result = getDivisors($inputNumber);
print_r($result);
?>