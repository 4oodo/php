<?php

$number = 12345;

$firstDigit = (int)strval($number)[0];
$lastDigit = $number % 10;

$sum = $firstDigit + $lastDigit;

echo "Сумма первой и последней цифры числа: " . $sum;
?>
