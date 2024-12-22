<?php

$number = 1234567890;
$evenCount = 0;

$digits = str_split($number);

foreach ($digits as $digit) {
    if ($digit % 2 == 0) {
        $evenCount++;
    }
}

echo "Количество четных цифр: " . $evenCount;
?>
