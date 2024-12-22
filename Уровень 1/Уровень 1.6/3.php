<?php

$array = [-1, 2, -3, 4, -5, 6];
$sumOfPositives = array_sum(array_filter($array, fn($x) => $x > 0));

echo $sumOfPositives . "\n";
?>
