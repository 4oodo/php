<?php

function countDivisors($number) {
    $count = 0;
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $count++;
        }
    }
    return $count;
}

$inputNumber = 12;
$result = countDivisors($inputNumber);
echo "Количество делителей: " . $result;
?>