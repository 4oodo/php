<?php

$array = [1, -2, 3, -4, 5, -6];
$negativeCount = count(array_filter($array, fn($element) => $element < 0));

echo "Количество отрицательных чисел в массиве: " . $negativeCount;
?>