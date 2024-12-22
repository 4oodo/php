<?php

function sumOfDivisors($number) {
    $sum = 0;
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum;
}

// Example usage
$number = 12;
echo sumOfDivisors($number);
?>