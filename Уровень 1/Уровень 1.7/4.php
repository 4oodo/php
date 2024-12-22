<?php

$number = 12345;
$digits = str_split((string)$number);
$sum = array_sum($digits);

echo $sum . "\n";
?>