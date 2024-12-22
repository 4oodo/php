<?php

$array = [1, 2, 3, 4, 5, 6];
$halfLength = intdiv(count($array), 2);
$sum = array_sum(array_slice($array, 0, $halfLength));

echo "Сумма первой половины массива: " . $sum;
?>
