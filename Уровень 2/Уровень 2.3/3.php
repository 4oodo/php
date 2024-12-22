<?php

$string = '12,34,56';
$numbers = explode(',', $string);
$sum = array_sum($numbers);

echo "Сумма чисел: " . $sum;
?>