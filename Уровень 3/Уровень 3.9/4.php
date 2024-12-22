<?php

function sumOfDigits($number) {
    $sum = 0;
    while ($number > 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum;
}

$result = [];
for ($i = 1; $i <= 1000; $i++) {
    if (sumOfDigits($i) == 13) {
        $result[] = $i;
    }
}

print_r($result);
?>