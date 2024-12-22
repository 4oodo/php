<?php

$number1 = 12345;
$number2 = 15678;

$firstDigit1 = (int)strval($number1)[0];
$firstDigit2 = (int)strval($number2)[0];

if ($firstDigit1 === $firstDigit2) {
    echo "Первые цифры чисел совпадают.";
} else {
    echo "Первые цифры чисел не совпадают.";
}
?>
