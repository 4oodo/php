<?php

$array = [1, -2, 3, 11, 5, 6, 10, -4];
$sumOfFilteredElements = array_sum(array_filter($array, fn($x) => $x > 0 && $x < 10));

echo $sumOfFilteredElements . "\n";
?>